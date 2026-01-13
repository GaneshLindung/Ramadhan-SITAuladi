<?php

namespace App\Http\Controllers\Ramadan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('ramadan.contact');
    }

    public function send(Request $request)
    {
        // Nanti versi MySQL/email: simpan pesan / kirim email
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:800'],
            'whatsapp' => ['nullable', 'string', 'max:30'],
        ]);

        return back()->with('success', 'Pesan berhasil dikirim. Terima kasih.');
    }
}
