<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mapel;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mapel = Mapel::all();
        return view('home', compact('mapel'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $mapel = Mapel::findOrFail($id);
        return view('form', compact('user', 'mapel'));

    }

    public function update(Request $request, $id)
    {
        $daftar = User::findOrFail($id);

        $daftar->update([
            'mapel_id' =>$request->mapel_id,
        ]);

        $daftar->save();
        return redirect()->route('kelas', Auth::User()->id);
    }
}
