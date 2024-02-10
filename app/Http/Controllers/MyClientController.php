<?php

namespace App\Http\Controllers;

use App\Models\MyClient;
use App\Http\Requests\StoreMyClientRequest;
use App\Http\Requests\UpdateMyClientRequest;

class MyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StoreMyClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyClient  $myClient
     * @return \Illuminate\Http\Response
     */
    public function show(MyClient $myClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyClient  $myClient
     * @return \Illuminate\Http\Response
     */
    public function edit(MyClient $myClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyClientRequest  $request
     * @param  \App\Models\MyClient  $myClient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyClientRequest $request, MyClient $myClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyClient  $myClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyClient $myClient)
    {
        //
    }
}
