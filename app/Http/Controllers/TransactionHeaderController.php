<?php

namespace App\Http\Controllers;

use App\Models\TransactionHeader;
use App\Http\Requests\StoreTransactionHeaderRequest;
use App\Http\Requests\UpdateTransactionHeaderRequest;
use App\Models\Cart;
use App\Models\TransactionDetail;

class TransactionHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('receipt', [
            'header' => TransactionHeader::where('users_id', auth()->user()->id)->latest()->first()
        ]);
    }

    public function history(){
        return view('history', [
            'header' => TransactionHeader::where('users_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionHeaderRequest $request, $total)
    {
        //
        $countitem = 0;
        $validateData = $request->validate([
            'cardname' => ['required', 'string', 'min:6'],
            'cardnumber' => ['required', 'string'],
            'datemonth' => ['required'],
            'dateyear' => ['required'],
            'cvc' => ['required'],
            'country' => ['required', 'string'],
            'zip' => ['required']
        ]);
        if($validateData['datemonth'] < 1 || $validateData['datemonth'] > 12){
            return redirect()->back()->with('invalid', 'Invalid month!');
        }else if($validateData['dateyear'] < date("Y") || $validateData['datemonth'] > 2050){
            return redirect()->back()->with('invalid', 'Invalid year!');
        }else if($validateData['cvc'] < 100){
            return redirect()->back()->with('invalid', 'Invalid CVC!');
        }
        $headerData['users_id'] = auth()->user()->id;
        $headerData['cardname'] = $validateData['cardname'];
        $headerData['cardnumber'] = $validateData['cardnumber'];
        $headerData['total'] = $total;

        $item = Cart::where('users_id', auth()->user()->id)->get();
        foreach($item as $itm){
            $countitem++;
        }
        $headerData['totalitem'] = $countitem;
        TransactionHeader::create($headerData);

        $transinfo = TransactionHeader::where('users_id', auth()->user()->id)->latest()->first();
        foreach($item as $itm){
            $data['transaction_id'] = $transinfo->id;
            $data['softwares_id'] = $itm->softwares_id;
            TransactionDetail::create($data);
        }
        Cart::where('users_id', auth()->user()->id)->delete();
        return redirect('/receipt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionHeader  $transactionHeader
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionHeader $transactionHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionHeader  $transactionHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionHeader $transactionHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionHeaderRequest  $request
     * @param  \App\Models\TransactionHeader  $transactionHeader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionHeaderRequest $request, TransactionHeader $transactionHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionHeader  $transactionHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionHeader $transactionHeader)
    {
        //
    }
}
