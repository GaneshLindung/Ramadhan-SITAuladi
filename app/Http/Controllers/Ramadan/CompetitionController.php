<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        return view('ramadan.competitions');
    }

    public function register(Request $request)
    {
        // Nanti versi MySQL: simpan pendaftaran lomba
        $request->validate([
            'student_name' => ['required', 'string', 'max:120'],
            'class' => ['required', 'string', 'max:50'],
            'competition' => ['required', 'string', 'max:80'],
            'whatsapp' => ['nullable', 'string', 'max:30'],
        ]);

        return back()->with('success', 'Pendaftaran lomba berhasil dikirim. Semoga sukses!');
    }
}
