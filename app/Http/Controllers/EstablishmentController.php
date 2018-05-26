<?php

namespace ToiletBook\Http\Controllers;

use ToiletBook\Establishment;
use Illuminate\Http\Request;
use ToiletBook\Washroom;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::all()->toArray();
        return response()->json($establishments);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \ToiletBook\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show($establishmentId)
    {
        return response()->json(Establishment::findOrFail($establishmentId));
    }

    public function washrooms($establishmentId)
    {
        return Washroom::with(['establishment.area', 'washroomAttributes'])->where('establishment_id', $establishmentId)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ToiletBook\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ToiletBook\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establishment $establishment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ToiletBook\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment)
    {
        //
    }
}
