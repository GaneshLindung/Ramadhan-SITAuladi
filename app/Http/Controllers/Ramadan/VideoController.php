<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        return view('ramadan.videos');
    }
}
