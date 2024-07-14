<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositlogController extends Controller
{
    public function depositlog()
    {
        return view('frontend.deposit-log');
    }
}
