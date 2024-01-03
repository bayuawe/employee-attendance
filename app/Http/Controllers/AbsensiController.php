<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function showAbsensiForm()
    {
        // Logika untuk menentukan status absensi dan waktu terakhir absensi
        $statusAbsensi = 'Masuk'; // Gantilah dengan logika sesuai kebutuhan
        $waktuTerakhirAbsensi = Carbon::now()->subHours(2)->format('Y-m-d H:i:s'); // Gantilah dengan logika sesuai kebutuhan

        return view('absensi', compact('statusAbsensi', 'waktuTerakhirAbsensi'));
    }

    public function submitAbsensi(Request $request)
    {
        // Logika untuk menyimpan data absensi ke database
        // ...

        return redirect()->route('absensi')->with('success', 'Absensi berhasil disubmit.');
    }
}
