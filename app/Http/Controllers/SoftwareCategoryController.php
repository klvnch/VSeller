<?php

namespace App\Http\Controllers;

use App\Models\SoftwareCategory;
use App\Http\Requests\StoreSoftwareCategoryRequest;
use App\Http\Requests\UpdateSoftwareCategoryRequest;

class SoftwareCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreSoftwareCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoftwareCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SoftwareCategory  $softwareCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SoftwareCategory $softwareCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SoftwareCategory  $softwareCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SoftwareCategory $softwareCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoftwareCategoryRequest  $request
     * @param  \App\Models\SoftwareCategory  $softwareCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoftwareCategoryRequest $request, SoftwareCategory $softwareCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SoftwareCategory  $softwareCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SoftwareCategory $softwareCategory)
    {
        //
    }
}
