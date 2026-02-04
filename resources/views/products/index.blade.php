@extends('layouts.app')

@section('title', 'Medicines')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="fw-bold">Filters</h5>
                    <form method="get">
                        <div class="mb-3">
                            <label class="form-label">Search</label>
                            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Medicine, brand, salt">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Min Price</label>
                            <input type="number" name="min_price" value="{{ request('min_price') }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Max Price</label>
                            <input type="number" name="max_price" value="{{ request('max_price') }}" class="form-control">
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Apply</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold">All Medicines</h3>
                <span class="text-muted">{{ $products->total() }} items</span>
            </div>
            <div class="row g-3">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <span class="badge bg-info text-dark mb-2">{{ $product->brand }}</span>
                                <h6 class="card-title">{{ $product->name }}</h6>
                                <p class="text-muted">{{ $product->salt }}</p>
                                <strong>₹{{ $product->price }}</strong>
                                @if($product->prescription_required)
                                    <div class="mt-2">
                                        <span class="badge bg-warning text-dark">Prescription Required</span>
                                    </div>
                                @endif
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="/products/{{ $product->id }}" class="btn btn-outline-primary w-100">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4">
                {{ $products->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
