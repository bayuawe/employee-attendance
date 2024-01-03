<?php

namespace App\Http\Controllers;

class LaporanController extends Controller
{
    public function showLaporanAbsensi()
    {
        // Logika untuk menampilkan laporan absensi
        return view('laporan_absensi'); // Ganti dengan nama view yang sesuai
    }
}
