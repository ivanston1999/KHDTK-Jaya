<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($attributes)) {
            session()->regenerate();
            return redirect('beranda');
        } else {
            return back()->withErrors(['error' => 'Nama atau kata sandi salah. Silakan coba lagi.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/');
    }
}
