<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class contact extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nmr_telp' => 'required',
            'pesan' => 'required'
        ]);
        message::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nmr_telp' => $request->nmr_telp,
            'pesan' => $request->pesan
        ]);
        return view('contact');
    }
}