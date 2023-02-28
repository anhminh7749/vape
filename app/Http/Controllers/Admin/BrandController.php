<?php

namespace App\Http\Controllers\Admin;

use App\Models\origin;
use App\Http\Requests\StoreoriginRequest;
use App\Http\Requests\UpdateoriginRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('components.admin.brand.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.admin.brand.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreoriginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreoriginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function show(origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function edit(origin $origin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateoriginRequest  $request
     * @param  \App\Models\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateoriginRequest $request, origin $origin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function destroy(origin $origin)
    {
        //
    }
}
