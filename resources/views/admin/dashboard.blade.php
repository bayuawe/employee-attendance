@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        <p>Welcome, {{ Auth::guard('admin')->user()->name }}!</p>
                        <!-- Add your content for the admin dashboard here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
