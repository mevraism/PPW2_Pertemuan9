<!-- resources/views/auth/dashboard.blade.php -->
@extends('auth.layouts')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
                
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @endif

                <div class="mt-4">
                        <a href="{{ route('adminpage') }}" class="btn btn-primary">
                            <i class="fas fa-lock"></i> Access Admin Panel
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection