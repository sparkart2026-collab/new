@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">{{ $category->name }}</h2>
            <p class="text-muted">{{ $category->description }}</p>
        </div>
        <a href="/products?category_id={{ $category->id }}" class="btn btn-outline-primary">View All</a>
    </div>

    <div class="row g-3">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title">{{ $product->name }}</h6>
                        <p class="text-muted">{{ $product->brand }}</p>
                        <strong>₹{{ $product->price }}</strong>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="/products/{{ $product->id }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
