<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomModel;
use DataTables;

class RoomController extends Controller
{
    public function index()
    {
        $room['data'] = RoomModel::paginate(10);
        // print_r ($room['data']);
        return response()->json($room);
    }
    public function dataTable()
    {
        return Datatables::of(RoomModel::all())->make(true);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $room = new RoomModel();
        $room->name = $request->name;
        $room->place = $request->place;
        $room->price = $request->price;
        $room->status = $request->status;
        $room->save();
        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil disimpan";
        $rsp['response']['insert_id'] = $room->id;
        return response()->json($rsp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 0)
    {
        $room['data'] = RoomModel::find($id);
        return response()->json($room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 0)
    {

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
        $room = new RoomModel();
        $room->exists = true;
        $room->id = $id;
        $room->name = $request->name;
        $room->place = $request->place;
        $room->price = $request->price;
        $room->status = $request->status;
        $room->save();

        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil diupdate";
        $rsp['response']['insert_id'] = $id;
        return response()->json($rsp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = new RoomModel();
        $room->destroy($id);

        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil dihapus";
        return response()->json($rsp);
    }
}
