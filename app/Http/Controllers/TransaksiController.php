<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use App\Mapel;
use DataTables;

class TransaksiController extends Controller
{

    public function index()
    {
        return view('transaksi.index');
    }

    public function create()
    {
        $user = User::all();
        $mapel = Mapel::all();
        $trans = new Transaksi();
        return view('transaksi.form', ['trans' => $trans, 'mapel' => $mapel, 'user'=>$user]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'invoice_number' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);

        $trans = Transaksi::create($request->all());
        return $trans;
    }

    public function show($id)
    {
        $trans = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('trans'));
    }

    public function edit($id)
    {
        $user = User::all();
        $trans = Transaksi::findOrFail($id);
        return view('transaksi.edit', ['trans'=>$trans, 'user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $trans = Transaksi::findOrFail($id);

        $this->validate($request, [
            'invoice_number' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);
        
        $trans->update([
            'invoice_number' => $request->invoice_number,
            'user_id' => $request->user_id,
            'status' => $request->status,
        ]);

        $trans->save();
    }

    public function destroy($id)
    {
        $trans = Transaksi::findOrFail($id);
        $trans->delete();
    }

    public function dataTable()
    {
        $trans = Transaksi::query();
        
        return DataTables::of($trans)->addColumn('action', function($trans) {
            return view('transaksi._action', [
                'trans' => $trans,
                'url_show' => route('transaksi.show', $trans->id),
                'url_edit' => route('transaksi.edit', $trans->id),
                'url_destroy' => route('transaksi.destroy', $trans->id),
            ]);
        })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}
