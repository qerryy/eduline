<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\User;

class WelcomeController extends Controller
{

    public function index()
    {
        $mapel = Mapel::all();
        $user = User::all();
        return view('welcome', ['mapel'=>$mapel, 'user'=>$user]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('kelas', ['user'=>$user]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
