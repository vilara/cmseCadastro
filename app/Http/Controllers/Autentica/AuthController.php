<?php

namespace App\Http\Controllers\Autentica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('site.auth.login');
    }

    public function showRegistrationForm(){
        return view('site.auth.register');
    }

    public function register(Request $request){
        dd($request->all());
        return redirect()->intended('/home');
    }

    public function showLinkRequestForm(){
        return view('site.auth.passwords.email');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }
    }


    public function sendResetLinkEmail(Request $request){
        return $request;
    }
   

    public function logout(){
        Auth::logout();
        return redirect()->intended('login');
    }

    
}
