<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('ramadan.home');
    }
}
