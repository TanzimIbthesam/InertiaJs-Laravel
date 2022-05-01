<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthController extends Controller
{
    //
    public function create(Request $request){
        if($request->user()){
            return redirect()->back();
        }
        return Inertia::render('Login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return Redirect::route('home'); 
        }
 
        
    }
    public function destroy()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
