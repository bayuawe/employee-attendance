@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Halaman Absensi Karyawan</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            @if (Auth::user())
                                <h5>Selamat datang, {{ Auth::user()->name }}!</h5>
                            @else
                                <h5>Selamat datang, Pengguna!</h5>
                            @endif
                            <p>Status Absensi: {{ $statusAbsensi }}</p>
                            <p>Waktu Terakhir Absensi: {{ $waktuTerakhirAbsensi }}</p>
                        </div>

                        <form action="{{ route('absensi.submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="alasan">Alasan Khusus (opsional):</label>
                                <textarea class="form-control" id="alasan" name="alasan" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Absen Masuk</button>
                        </form>

                        <div class="mt-3">
                            <p><a href="{{ route('laporan.absensi') }}">Lihat Laporan Absensi</a></p>
                            <p><a href="{{ route('profil') }}">Pengaturan Profil</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
