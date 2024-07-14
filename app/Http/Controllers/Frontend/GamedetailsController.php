<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamedetailsController extends Controller
{
    public function gamedetails()
    {
        return view('frontend.game-details');
    }
}
