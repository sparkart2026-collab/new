<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show()
    {
        $cart = Cart::with('items.product')->first();

        return new CartResource($cart);
    }

    public function store(Request $request, CartService $cartService)
    {
        $cart = $cartService->addItem($request->all());

        return new CartResource($cart);
    }

    public function update(Request $request, CartService $cartService)
    {
        $cart = $cartService->updateItem($request->all());

        return new CartResource($cart);
    }

    public function destroy(Request $request, CartService $cartService)
    {
        $cart = $cartService->removeItem($request->all());

        return new CartResource($cart);
    }
}
