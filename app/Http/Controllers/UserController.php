<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DataTables;

class UserController extends Controller
{

    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        $model = new User();
        return view('user.form', compact('model'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        $model = User::create($request->all());
        return $model;
    }

    public function show($id)
    {
        $model = User::findOrFail($id);
        return view('user.show', compact('model'));
    }

    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('user.form', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $model = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
        
        $model->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($data['password']),
        ]);

        $model->save();
    }

    public function destroy($id)
    {
        $model = User::findOrFail($id);
        $model->delete();
    }

    public function dataTable()
    {
        $model = User::query();
        
        return DataTables::of($model)->addColumn('action', function($model) {
            return view('user._action', [
                'model' => $model,
                'url_show' => route('user.show', $model->id),
                'url_edit' => route('user.edit', $model->id),
                'url_destroy' => route('user.destroy', $model->id),
            ]);
        })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}