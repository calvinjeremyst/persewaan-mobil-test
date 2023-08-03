<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function register() {
        return view('register');
    }

    function saveuser(Request $request) {
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama' =>  $request->nama,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->telepon,
            'nomor_sim' => $request->sim
        ]);

        return redirect('/login');
    }

    function login() {
        return view('login');
    }

    function loginuser(Request $request) {
        if(!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect('/login');
        }
        else{
            return redirect('/home');
        };
    }

    function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
