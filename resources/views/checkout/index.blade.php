@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container">
    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Delivery Address</h4>
                    <div class="row g-3">
                        @foreach($addresses as $address)
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="mb-1">{{ $address->label ?? 'Home' }}</h6>
                                    <p class="text-muted mb-0">{{ $address->line1 }}, {{ $address->city }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <h4 class="fw-bold">Prescription Upload</h4>
                    <input type="file" class="form-control">
                    <small class="text-muted">Upload JPG/PNG/PDF.</small>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Order Summary</h4>
                    @if($cart)
                        <ul class="list-group list-group-flush">
                            @foreach($cart->items as $item)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>{{ $item->product->name }} x {{ $item->quantity }}</span>
                                    <span>₹{{ $item->unit_price * $item->quantity }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="d-grid mt-4">
                        <a href="/checkout/confirmation" class="btn btn-primary btn-lg">Pay (Mock)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
