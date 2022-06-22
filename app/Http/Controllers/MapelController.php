<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use DataTables;

class MapelController extends Controller
{

    public function index()
    {
        return view('mapel.index');
    }

    public function create()
    {
        $mapels = new Mapel();
        return view('mapel.form', compact('mapels'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'mapel_name' => 'required|string|max:255',
            'total_price' => 'required',
        ]);

        $mapels = Mapel::create($request->all());
        return $mapels;
    }

    public function show($id)
    {
        $mapels = Mapel::findOrFail($id);
        return view('mapel.show', compact('mapels'));
    }

    public function edit($id)
    {
        $mapels = Mapel::findOrFail($id);
        return view('mapel.form', compact('mapels'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'mapel_name' => 'required|string|max:255',
            'total_price' => 'required',
        ]);

        $mapels = Mapel::findOrFail($id);

        $mapels->update($request->all());
    }

    public function destroy($id)
    {
        $mapels = Mapel::findOrFail($id);
        $mapels->delete();
    }

    public function dataTable()
    {
        $mapels = Mapel::query();

        return DataTables::of($mapels)->addColumn('action', function($mapels) {
            return view('mapel._action', [
                'mapels' => $mapels,
                'url_show' => route('mapel.show', $mapels->id),
                'url_edit' => route('mapel.edit', $mapels->id),
                'url_destroy' => route('mapel.destroy', $mapels->id),
            ]);
        })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}