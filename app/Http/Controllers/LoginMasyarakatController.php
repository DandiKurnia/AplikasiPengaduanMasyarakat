<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class LoginMasyarakatController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:masyarakat')->except('logout');
    }

    // public function guard()
    // {
    //     return Auth::guard('masyarakat');
    // }

    public function login()
    {
        return view('auth.masyarakat.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('masyarakat')->attempt($credentials)) {
            // $user = auth()->user();
            $request->session()->regenerate();
            return redirect()->intended('/pengaduan');
        }
        return back()->with('loginError', 'Login Failed!!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('logout', 'Logout Success !!');
    }
}
