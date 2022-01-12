<?php

namespace App\Http\Controllers;

use App\Models\SoftwareDetails;
use App\Http\Requests\StoreSoftwareDetailsRequest;
use App\Http\Requests\UpdateSoftwareDetailsRequest;

class SoftwareDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSoftwareDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoftwareDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SoftwareDetails  $softwareDetails
     * @return \Illuminate\Http\Response
     */
    public function show(SoftwareDetails $softwareDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SoftwareDetails  $softwareDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(SoftwareDetails $softwareDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoftwareDetailsRequest  $request
     * @param  \App\Models\SoftwareDetails  $softwareDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoftwareDetailsRequest $request, SoftwareDetails $softwareDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SoftwareDetails  $softwareDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(SoftwareDetails $softwareDetails)
    {
        //
    }
}
