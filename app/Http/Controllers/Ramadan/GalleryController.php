<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        return view('ramadan.gallery');
    }
}
