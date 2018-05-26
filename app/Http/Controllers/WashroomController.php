<?php

namespace ToiletBook\Http\Controllers;

use ToiletBook\Washroom;
use Illuminate\Http\Request;

class WashroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "washrooms";
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "store washroom";
    }

    /**
     * Display the specified resource.
     *
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function show(Washroom $washroom)
    {
        return "washroom " . $washroom;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Washroom $washroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Washroom $washroom)
    {
        return "update washroom";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Washroom $washroom)
    {
        return "delete washroom" . $washroom;
    }
}
