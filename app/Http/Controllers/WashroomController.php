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
        $washrooms = Washroom::all()->toArray();
        return response()->json([
            'message' => 'washroom list',
            'data' => $washrooms
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'location_description' => 'required'
        ]);

        if($validator->fails()) {
            return \App::abort(500);
        }

        $washroom = Washroom::create([
            'name' => $request->name,
            'location_description' => $request->location_description,
            'establishment_id' => $request->establishment_id,
        ]);

        return response()->json([
            'message' => 'washroom created',
            'data' => $washroom
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function show(int $washroomId)
    {
        $washroom = Washroom::findOrFail($washroomId);
        return response()->json([
            'message' => 'washroom '. $washroom->id . ' infomation',
            'data' => $washroom
        ]);
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
    public function update(Request $request, int $washroomId)
    {
        $washroom = Washroom::findOrFail($washroomId);

        $washroom->name = $request->name;
        $washroom->location_description = $request->location_description;
        $washroom->save();

        return response()->json([
            'message' => 'washroom '. $washroom->id . ' updated',
            'data' => $washroom
        ]);
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
