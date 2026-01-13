<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('ramadan.profile');
    }
}
