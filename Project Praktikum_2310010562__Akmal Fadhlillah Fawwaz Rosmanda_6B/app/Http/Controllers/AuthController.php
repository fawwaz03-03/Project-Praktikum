<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('welcome');
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->with(
            'error',
            'Username atau password salah'
        );
    }

    public function registerView()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()
            ->route('auth.loginView')
            ->with('success', 'Registration Successful, Please Login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('auth.loginView');
    }
}