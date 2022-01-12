<?php

namespace App\Http\Controllers;

use App\Models\Softwares;
use App\Models\SoftwareDetails;
use App\Models\TransactionDetail;
use App\Http\Requests\StoreSoftwaresRequest;
use App\Http\Requests\UpdateSoftwaresRequest;

class SoftwaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home', [
            'software' => Softwares::all()->random(4)
        ]);
    }

    public function manage()
    {
        //
        return view('managesw', [
            'software' => Softwares::simplePaginate(4)
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
     * @param  \App\Http\Requests\StoreSoftwaresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoftwaresRequest $request)
    {
        //
        $searchData = $request['search'];
        $results = Softwares::where('title', 'like', '%'.$searchData.'%')->get();
        return view('search', ['results' => $results]);
    }

    public function filter(StoreSoftwaresRequest $request)
    {
        //
        $category = $request['category'];
        $searchData = $request['search'];
        if($category != null){
            $results = Softwares::where('category_id', 'like', '%'.$category.'%')->simplePaginate(4);
        }else if($searchData != null){
            $results = Softwares::where('title', 'like', '%'.$searchData.'%')->simplePaginate(4);
        }else if($category != null && $searchData != null){
            $results = Softwares::select('*')->where([
                ['title', 'like', '%'.$searchData.'%'],
                ['category_id', 'like', '%'.$category.'%']
            ])->first();
        }else{
            $results = Softwares::simplePaginate(8);
        }
        return view('managesw', ['software' => $results]);
    }

    public function deletesw($softwares_id)
    {
        //
        $sw = Softwares::where('id', $softwares_id);
        $detail = SoftwareDetails::where('softwares_id', $softwares_id);
        $transDetail = TransactionDetail::where('softwares_id', $softwares_id);
        $sw->delete();
        $detail->delete();
        $transDetail->delete();
        return redirect('/managesw');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Softwares  $softwares
     * @return \Illuminate\Http\Response
     */
    public function show(Softwares $softwares)
    {
        //
        return view('softwaredetail', [
            'software' => $softwares
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Softwares  $softwares
     * @return \Illuminate\Http\Response
     */
    public function edit(Softwares $softwares)
    {
        //
    }

    public function insert(StoreSoftwaresRequest $request){
        $validate = $request->validate([
            'swcategory' => ['required'],
            'swtitle' => ['required', 'string'],
            'swimg' => ['required'],
            'swvid' => ['required'],
            'swdesc' => ['required'],
            'swshortdesc' =>  ['required'],
            'swdeveloper' => ['required'],
            'swreleasedate' => ['required'],
            'swprice' => ['required'],
            'swversion' => ['required']
        ]);
        $Headerdata['category_id'] = $validate['swcategory'];
        $Headerdata['title'] = $validate['swtitle'];
        Softwares::create($Headerdata);

        $sw = Softwares::latest()->first();
        $Detaildata['softwares_id'] = $sw->id;
        $Detaildata['imgurl'] = $validate['swimg'];
        $Detaildata['vidurl'] = $validate['swvid'];
        $Detaildata['description'] = $validate['swdesc'];
        $Detaildata['shortdesc'] = $validate['swshortdesc'];
        $Detaildata['developer'] = $validate['swdeveloper'];
        $Detaildata['releasedate'] = $validate['swreleasedate'];
        $Detaildata['price'] = $validate['swprice'];
        $Detaildata['versionnumber'] = $validate['swversion'];

        SoftwareDetails::create($Detaildata);

        return redirect('/managesw');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoftwaresRequest  $request
     * @param  \App\Models\Softwares  $softwares
     * @return \Illuminate\Http\Response
     */
    public function updateSofw(UpdateSoftwaresRequest $request, $id)
    {
        //
        $validate = $request->validate([
            'swcategory' => ['required'],
            'swimg' => ['required'],
            'swvid' => ['required'],
            'swdesc' => ['required'],
            'swshortdesc' => ['required'],
            'swdeveloper' => ['required'],
            'swreleasedate' => ['required'],
            'swprice' => ['required'],
            'swversion' => ['required']
        ]);
        $Headerdata['category_id'] = $validate['swcategory'];
        $Headerdata['title'] = Softwares::where('id', $id)->value('title');

        $Detaildata['softwares_id'] = $id;
        $Detaildata['imgurl'] = $validate['swimg'];
        $Detaildata['vidurl'] = $validate['swvid'];
        $Detaildata['description'] = $validate['swdesc'];
        $Detaildata['shortdesc'] = $validate['swshortdesc'];
        $Detaildata['developer'] = $validate['swdeveloper'];
        $Detaildata['releasedate'] = $validate['swreleasedate'];
        $Detaildata['price'] = $validate['swprice'];
        $Detaildata['versionnumber'] = $validate['swversion'];

        Softwares::where('id', $id)->update($Headerdata);
        SoftwareDetails::where('softwares_id', $id)->update($Detaildata);
        return redirect('/managesw');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Softwares  $softwares
     * @return \Illuminate\Http\Response
     */
    public function destroy(Softwares $softwares)
    {
        //
    }

    public function updatesw(Softwares $sw){
        // $game = Games::where('id', $games_id)->get();
        return view('updatesw', [
            "software" => $sw
        ]);
    }
}
