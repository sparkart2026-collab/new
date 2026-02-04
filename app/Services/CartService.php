<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartItem;

class CartService
{
    public function addItem(array $payload): Cart
    {
        $cart = Cart::firstOrCreate(['user_id' => $payload['user_id'] ?? 1], [
            'status' => 'open',
        ]);

        CartItem::updateOrCreate([
            'cart_id' => $cart->id,
            'product_id' => $payload['product_id'],
        ], [
            'quantity' => $payload['quantity'] ?? 1,
            'unit_price' => $payload['unit_price'] ?? 0,
        ]);

        return $cart->load('items.product');
    }

    public function updateItem(array $payload): Cart
    {
        CartItem::query()
            ->where('id', $payload['cart_item_id'])
            ->update(['quantity' => $payload['quantity']]);

        return Cart::with('items.product')->find($payload['cart_id']);
    }

    public function removeItem(array $payload): Cart
    {
        CartItem::query()->where('id', $payload['cart_item_id'])->delete();

        return Cart::with('items.product')->find($payload['cart_id']);
    }
}
