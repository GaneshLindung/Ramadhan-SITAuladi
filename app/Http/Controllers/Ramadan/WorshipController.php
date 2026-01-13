<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorshipController extends Controller
{
    public function index()
    {
        return view('ramadan.worship');
    }

    public function store(Request $request)
    {
        // Nanti versi MySQL: simpan laporan ibadah
        // Untuk sekarang kita tampilkan sukses dulu
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'class' => ['required', 'string', 'max:50'],
            'tadarus_pages' => ['nullable', 'integer', 'min:0'],
            'notes' => ['nullable', 'string', 'max:500'],
        ]);

        return back()->with('success', 'Laporan ibadah berhasil dikirim. Jazakumullahu khairan.');
    }
}
