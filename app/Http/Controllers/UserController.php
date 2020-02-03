<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::get();
        $notification = $request->session()->get('status');

        return view('users.index', ['users' => $users, 'notification' => $notification]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->save();

        $request->session()->flash('status', 'added with success !');

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        User::where('id', $id)->update([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => md5($request->password),
            'last_name' => $request->last_name

        ]);

        $request->session()->flash('status', 'updated with success !');

        return redirect()->route('users.index');
    }

    public function destroy(Request $request,$id)
    {
        User::destroy($id);
        $request->session()->flash('status', 'deleted with success !');
        return redirect()->route('users.index');
    }
}
