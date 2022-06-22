<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Mapel;
use DataTables;

class JadwalController extends Controller
{

    public function index()
    {
        return view('jadwal.index');
    }

    public function create()
    {   
        $mapels = Mapel::all();
        $jadwal = new Jadwal();
        
        return view('jadwal.form', ['jadwal' => $jadwal, 'mapels' => $mapels]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'keterangan' => 'required',
            'mapel_id' => 'required',
        ]);

        $jadwal = Jadwal::create([
            'hari' => $request->hari,
            'keterangan' => $request->keterangan,
            'mapel_id'  => $request->mapel_id,
        ]);

        return view('jadwal.index', compact('jadwal'));
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        return view('jadwal.show', ['jadwal'=>$jadwal, 'mapel'=>$mapel]);
    }

    public function edit($id)
    {
        $mapel = Mapel::all();
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', ['jadwal'=>$jadwal, 'mapel'=>$mapel]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'keterangan' => 'required',
            'mapel_id' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update($request->all());

        return redirect()->route('jadwal.index');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
    }

    public function dataTable()
    {
        $jadwal = Jadwal::query();

        return DataTables::of($jadwal)->addColumn('action', function($jadwal) {
            return view('jadwal._action', [
                'jadwal' => $jadwal,
                'url_show' => route('jadwal.show', $jadwal->id),
                'url_edit' => route('jadwal.edit', $jadwal->id),
                'url_destroy' => route('jadwal.destroy', $jadwal->id)
            ]);
        })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}