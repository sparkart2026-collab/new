@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold">Your health essentials delivered in minutes.</h1>
            <p class="lead text-muted">Order medicines, wellness products, and daily health needs from trusted brands.</p>
            <a href="/products" class="btn btn-primary btn-lg">Shop Medicines</a>
        </div>
        <div class="col-lg-6 text-center">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b" alt="Healthcare" class="img-fluid rounded-4 shadow">
        </div>
    </div>

    <div class="mb-4">
        <h3 class="fw-bold">Shop by Category</h3>
        <div class="row g-3">
            @foreach($categories as $category)
                <div class="col-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="text-muted">{{ $category->description }}</p>
                            <a href="/categories/{{ $category->id }}" class="stretched-link">Explore</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <h3 class="fw-bold">Featured Medicines</h3>
        <div class="row g-3">
            @foreach($featuredProducts as $product)
                <div class="col-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">{{ $product->brand ?? 'Popular' }}</span>
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <p class="text-muted mb-1">{{ $product->salt }}</p>
                            <strong>₹{{ $product->price }}</strong>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <a href="/products/{{ $product->id }}" class="btn btn-outline-primary w-100">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
