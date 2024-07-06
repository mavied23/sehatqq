<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)

    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('user_name', Auth::user()->name); 
            return redirect()->route('halaman')->with('user_name', Auth::user()->name);
        }
        return back()->withErrors([
            'email' => 'the provied credentials do not match our record.',]);
            
    }    
}

