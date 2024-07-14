<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function play($type)
    {
        if($type == 'roulette') return view('frontend.play');
        if($type == 'coin') return view('frontend.game-details');
    }
}
