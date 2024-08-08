<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function users(Request $request)
    {
        dd(User::all());
    }

    public function signUpForm(Request $request)
    {
        return view('auth.sign-up');
    }
    
    public function signup(Request $request)
    {
        if ($request->isMethod("post")) {
            $request->validate([
                "firstname" => "required|string",
                "lastname" => "required|string",
                "username" => "required|string|unique:users",
                "email" => "required|email|unique:users",
                "phone_number" => "required|string|unique:users",
                "country_name" => "required|string",
                "password" => "required|string|min:8|confirmed",
            ]);
  

            User::create([
                "firstname" => $request->firstname,
                "lastname" => $request->lastname,
                "username" => $request->username,
                "email" => $request->email,
                "phone_number" => $request->phone_number,
                "country_name" => $request->country_name,
                "password" => Hash::make($request->password),
            ]);

            if (Auth::attempt([
                "email" => $request->email,
                "password" => $request->password,
            ])) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('sign-up');
            }
        }

        return view('auth.sign-up');
    }

    public function signin(Request $request)
    {
        if ($request->isMethod("post")) {
            $request->validate([
                "email" => "required|email",
                "password" => "required|string",
            ]);

            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('sign-in')->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }
        }

        return view('auth.sign-in');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('sign-in');
    }


}
