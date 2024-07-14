<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawlogController extends Controller
{
    public function withdrawlog()
    {
        return view('frontend.withdraw-log');
    }
}
