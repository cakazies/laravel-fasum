<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowModel;
use Faker\Factory as Faker;

class BorrowController extends Controller
{

    public function index()
    {
        $borrow = BorrowModel::select('id', 'name as title', 'start_date as start', 'end_date as end')
                            ->take(1000)
                            ->orderBy('id', 'ASC')
                            ->get();
        return response()->json($borrow);

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $borrow = new BorrowModel();
        $borrow->room_id = $request->room_id;
        $borrow->name = $request->name;
        $borrow->borrower = $request->borrower;
        $borrow->start_date = $request->start_date;
        $borrow->end_date = $request->end_date;
        $borrow->booking = date('Y-m-d H:i:s');
        $borrow->status = "1";
        $borrow->save();

        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil disimpan";
        $rsp['response']['insert_id'] = $borrow->id;
        return response()->json($rsp);
    }

    public function show($id)
    {
        $borrow = BorrowModel::find($id);
        return response()->json($borrow);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        $borrow = new BorrowModel();
        $borrow->exists = true;
        $borrow->id = $id;
        $borrow->room_id = $request->room_id;
        $borrow->name = $request->name;
        $borrow->borrower = $request->borrower;
        $borrow->start_date = $request->start_date;
        $borrow->end_date = $request->end_date;
        $borrow->status = "1";
        $borrow->save();

        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil diupdate";
        $rsp['response']['insert_id'] = $id;
        return response()->json($rsp);
    }

    public function destroy($id)
    {
        $borrow = new BorrowModel();
        $borrow->destroy($id);

        $rsp['response']['code'] = 200;
        $rsp['response']['massage'] = "Telah Berhasil dihapus";
        return response()->json($rsp);
    }
}
