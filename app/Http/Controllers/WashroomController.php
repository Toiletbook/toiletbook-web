<?php

namespace ToiletBook\Http\Controllers;

use ToiletBook\Visitor;
use ToiletBook\Washroom;
use Illuminate\Http\Request;
use ToiletBook\Establishment;
use ToiletBook\Area;

class WashroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $washrooms = Washroom::with(['establishment.area', 'washroomAttributes'])->get()->toArray();

        usort($washrooms, function($a, $b) {
            return $a['general_rating'] < $b['general_rating'];
        });

        return response()->json($washrooms);
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
            'area_name' => 'required',
            'establishment_name' => 'required',
            'location_description' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 401);
        }

        $area = Area::firstOrCreate(['name' => $request->area_name]);
        $establishment = Establishment::firstOrCreate([
            'name' => $request->establishment_name,
            'area_id' => $area->id
        ]);

        $washroom = Washroom::create([
            'name' => $request->name,
            'location_description' => $request->location_description,
            'establishment_id' => $establishment->id,
        ]);

        return response()->json($washroom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \ToiletBook\Washroom  $washroom
     * @return \Illuminate\Http\Response
     */
    public function show(int $washroomId)
    {
        $washroom = Washroom::with(['establishment.area', 'washroomAttributes'])->findOrFail($washroomId);
        return response()->json($washroom);
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
        $washroom = Washroom::with(['establishment.area', 'washroomAttributes'])->findOrFail($washroomId);

        $washroom->name = $request->name;
        $washroom->location_description = $request->location_description;
        $washroom->save();

        return response()->json($washroom);
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

    public function visit(int $washroomId)
    {
        $washroom = Washroom::findOrFail($washroomId);

        Visitor::create([
            'washroom_id' => $washroom->id
        ]);

        return response()->json([
            'message' => 'washroom ' . $washroom->id . ' updated'
        ]);
    }
}
