<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function index()
    {
        return view('ramadan.announcements');
    }
}
