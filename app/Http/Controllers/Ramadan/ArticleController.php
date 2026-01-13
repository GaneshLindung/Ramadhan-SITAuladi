<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('ramadan.articles');
    }

    public function show(string $slug)
    {
        // Nanti versi MySQL: ambil artikel by slug
        return view('ramadan.article_show', compact('slug'));
    }
}
