<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
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
            'username' => 'required|unique:masyarakats',
            'nik' => 'required|string|min:16|max:16|unique:masyarakats',
            'telp' => 'required|string|',
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|same:password|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        Masyarakat::create($validateData);
        // dd($validateData);

        return redirect('/login')->with('success', 'Registation successfull! Please Login');
    }
}
