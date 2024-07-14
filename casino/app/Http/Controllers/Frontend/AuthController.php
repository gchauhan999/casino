<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.sign-up');
    }
    public function signin()
    {
        return view('auth.sign-in');
    }
}
