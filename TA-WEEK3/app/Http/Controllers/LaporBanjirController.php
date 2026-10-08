<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor.form');
    }

    public function store(Request $request)
    {
        $laporan = $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric',
        ]);

        session(['laporan' => $laporan]);

        return redirect()->route('lapor.konfirmasi');
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        return view('lapor.konfirmasi', compact('laporan'));
    }

    public function daftar()
    {
        $laporan = [
            [
                'nama' => 'Yayan',
                'lokasi' => 'Buah Batu',
                'tinggi' => 10,
            ],
            [
                'nama' => 'Wawan',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 28,
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Jatinangor',
                'tinggi' => 70,
            ],
        ];

        return view('lapor.daftar', compact('laporan'));
    }
}