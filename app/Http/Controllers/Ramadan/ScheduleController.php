<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('ramadan.schedule');
    }
}
