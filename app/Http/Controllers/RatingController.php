<?php

namespace ToiletBook\Http\Controllers;

use Illuminate\Http\Request;
use ToiletBook\Rating;

class RatingController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $washroomId)
    {

        $validator = \Validator::make($request->all(), [
            'attribute_id' => 'required',
            'value' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => 'parameter error'
            ], 401);
        }

        $rating = Rating::create([
            'attribute_id' => $request->attribute_id,
            'value' => $request->value,
        ]);

        return response()->json([
            'message' => 'washroom ' . $washroomId . ' rated',
            'data' => $rating
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
