<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building; 
use App\Room;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'building_name'=>'required',
            'total_floors'=>'required|integer',
            'total_rooms'=>'required|integer',
            'total_rooms_per_floor'=>'required|integer'
        ]);
        $building = new Building([
            'building_name'=>$request->get('building_name'),
            'total_floors'=>$request->get('total_floors'),
            'total_rooms'=>$request->get('total_rooms'),
            'total_rooms_per_floor'=>$request->get('total_rooms_per_floor')
        ]);
        $building->save();
        return redirect('/buildings')->with('success', 'Building has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buildings = Building::find($id);
        $rooms = $buildings->rooms;
        return view('buildings.show', compact('buildings','rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::find($id);
        return view('buildings.edit', compact('building'));
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
        $request->validate([
            'building_name'=>'required',
            'total_floors'=>'required|integer',
            'total_rooms'=>'required|integer',
            'total_rooms_per_floor'=>'required|integer'
        ]);

        $building = Building::find($id);
        $building->building_name = $request->get('building_name');
        $building->total_floors = $request->get('total_floors');
        $building->total_rooms = $request->get('total_rooms');
        $building->total_rooms_per_floor = $request->get('total_rooms_per_floor');

        $building->save();
        return redirect('/buildings')->with('success', 'Building has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
        $building->delete();
        return redirect('/buildings')->with('success', 'Building has been deleted Successfully');
    }
}
