<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }
}
