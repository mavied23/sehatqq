<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function edit(User $user){
        $users = User::all();
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|confirmed',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }


    public function store(Request $request)

    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
 
        ]);

        $name = $validatedData['name'];
        $email = $validatedData['email'];

        return view('halaman');
    }
}


