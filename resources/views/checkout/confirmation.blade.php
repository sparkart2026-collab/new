@extends('layouts.app')

@section('title', 'Order Confirmed')

@section('content')
<div class="container text-center">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h2 class="fw-bold text-success">Order Confirmed 🎉</h2>
            <p class="text-muted">Thank you for shopping with HealthMart. Your order is being processed.</p>
            <a href="/products" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
</div>
@endsection
