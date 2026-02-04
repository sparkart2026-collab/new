@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <div class="row g-4">
        <div class="col-lg-5">
            <img src="https://images.unsplash.com/photo-1584305574647-0cc949a2bb9f" alt="{{ $product->name }}" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-lg-7">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->brand }} • {{ $product->salt }}</p>
            <h3 class="text-primary">₹{{ $product->price }}</h3>
            <p class="text-muted">MRP: ₹{{ $product->mrp }}</p>
            @if($product->prescription_required)
                <span class="badge bg-warning text-dark">Prescription Required</span>
            @endif
            <p class="mt-3">{{ $product->description }}</p>
            <button class="btn btn-primary btn-lg">Add to Cart</button>
            <div class="mt-3 text-muted">Stock: {{ $product->stock }}</div>
        </div>
    </div>
</div>
@endsection
