<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $user = User::latest()->first()->paginate(10);
        // return $user;
        return view('users.list', [
            'users' => $user
        ]);
    }

    public function store(Request $user)
    {
        $input = $user->all();
        User::create($input);
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('users', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('/user');
    }

    public function destroy(User $id)
    {
        $id->delete();
        return redirect('/employee');
    }
}
