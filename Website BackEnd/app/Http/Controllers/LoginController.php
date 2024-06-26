<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);


        if(Auth::attempt($credentials)){
            if (Auth::user()->role == 'Admin') {

                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/');
            }
        }else

        return back()->with('loginError', 'Wrong email or password! Login failed.');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
