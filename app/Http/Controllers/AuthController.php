<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $login = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->remember ?? false);

        if ($login)
            return redirect('dashboard');

        return redirect()->back()->with('error', 'Credential is not match');
    }
}
