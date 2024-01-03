<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')  {{-- You can extend a master layout if you have one --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin Dashboard</h1>

                {{-- Display dynamic content or statistics --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">{{ $totalUsers }}</p>
                    </div>
                </div>

                {{-- Add more cards or sections as needed --}}
            </div>
        </div>
    </div>
@endsection
