<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('NIK', 'email', 'password'))){
            return redirect('/');
        }

        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'NIK' => $request->NIK,
            'no_telpon' => $request->no_telpon,
            'foto' => 'test.jpg',
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
