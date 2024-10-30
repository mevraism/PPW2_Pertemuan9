<!-- resources/views/auth/adminpage.blade.php -->
@extends('auth.layouts')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Admin Dashboard</div>
            <div class="card-body">
                <h4>Welcome to Admin Panel</h4>
                <p>This is a restricted area for administrators only.</p>
                
                <!-- Tambahkan konten admin di sini -->
                
                <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection