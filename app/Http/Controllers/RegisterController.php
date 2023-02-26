<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:225',
            'nik' => 'required|string|min:16|max:16|unique:users',
            'telpon' => 'required|string|',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|same:password|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // dd($validateData);

        return redirect('/login')->with('success', 'Registation successfull! Please Login');
    }
}
