<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginuser(Request $request)
    {
        // Validasi email dan password
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect('tabelpesanan');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }
    

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request){


        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        Auth::login($user);

        return redirect('/');
}

    
    
    
}
