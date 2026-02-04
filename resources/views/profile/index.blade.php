@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4">My Profile</h2>
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold">Demo User</h5>
                    <p class="text-muted mb-0">demo@healthmart.test</p>
                    <p class="text-muted">+91 99999 99999</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold">Saved Addresses</h5>
                    <div class="row g-3">
                        @foreach($addresses as $address)
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="mb-1">{{ $address->label ?? 'Home' }}</h6>
                                    <p class="text-muted mb-0">{{ $address->line1 }}, {{ $address->city }}</p>
                                    <small class="text-muted">{{ $address->phone }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
