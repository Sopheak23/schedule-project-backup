<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('rooms.create',['building_id' => $id]);
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
            'room_name'=>'required',
            'total_students'=>'required'
        ]);

        $room = new Room([
            'room_name'=>$request->get('room_name'),
            'total_students'=>$request->get('total_students'),
            'building_id' => $request->get('building_id')
        ]);

        $room->save();
        $building_id = $room->building_id;
        return redirect('/buildings/'.$building_id )->with('success', 'Room has been added');
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
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
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
            'room_name'=>'required',
            'total_students'=>'required'
        ]);
        $room = Room::find($id);
        $room->room_name = $request->get('room_name');
        $room->total_students = $request->get('total_students');        
        $room->save();

        $building_id = $room->building_id;
        return redirect('/buildings/'. $building_id)->with('success', 'Room has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $building_id = $room->building_id;
        $room->delete();
        return redirect('/buildings/'. $building_id)->with('success', 'Room has been deleted Successfully');
    }
}
