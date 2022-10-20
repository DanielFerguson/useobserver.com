<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEndpointRequest;
use App\Http\Requests\UpdateEndpointRequest;
use App\Models\Endpoint;

class EndpointController extends Controller
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
     * @param  \App\Http\Requests\StoreEndpointRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEndpointRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Http\Response
     */
    public function show(Endpoint $endpoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Endpoint $endpoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEndpointRequest  $request
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEndpointRequest $request, Endpoint $endpoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endpoint  $endpoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endpoint $endpoint)
    {
        //
    }
}
