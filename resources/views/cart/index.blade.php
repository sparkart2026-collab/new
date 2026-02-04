@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4">Your Cart</h2>
    <div class="card">
        <div class="card-body">
            @if($cart && $cart->items->count())
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $item)
                                <tr>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₹{{ $item->unit_price }}</td>
                                    <td>₹{{ $item->unit_price * $item->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <a href="/checkout" class="btn btn-primary">Proceed to Checkout</a>
                </div>
            @else
                <p class="text-muted mb-0">Your cart is empty. Browse medicines to add items.</p>
            @endif
        </div>
    </div>
</div>
@endsection
