<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrepreneurRequest;
use App\Http\Requests\UpdateEntrepreneurRequest;
use App\Models\Entrepreneur;

class EntrepreneurController extends Controller
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
     * @param  \App\Http\Requests\StoreEntrepreneurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrepreneurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrepreneur  $entrepreneur
     * @return \Illuminate\Http\Response
     */
    public function show(Entrepreneur $entrepreneur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrepreneur  $entrepreneur
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrepreneur $entrepreneur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntrepreneurRequest  $request
     * @param  \App\Models\Entrepreneur  $entrepreneur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepreneurRequest $request, Entrepreneur $entrepreneur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrepreneur  $entrepreneur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrepreneur $entrepreneur)
    {
        //
    }
}
