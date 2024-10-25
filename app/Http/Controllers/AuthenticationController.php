<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(){
        return view('layout.login');
    }

    public function loginUser(Request $request){
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register(){
        return view('layout.register');
    }

    public function registerUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect('/login'); 
    }

    public function logout(){
        Auth::logout();
        return redirect('/login'); 
    }
}
