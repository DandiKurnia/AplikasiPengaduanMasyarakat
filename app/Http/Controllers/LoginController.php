<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:masyarakat')->except('logout');
    }
    
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $remember = $request->has('remember');

        if (Auth::attempt($credentials,$remember)) {
            $user = auth()->user();
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('login', 'Login Success !!');
        }
        return back()->with('loginError', 'Login Failed!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
        return redirect('/login/admin')->with('logout', 'Logout Success !!');
    }
}
