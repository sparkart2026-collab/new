<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;

class OrderService
{
    public function checkout(array $payload): Order
    {
        $order = Order::create([
            'user_id' => $payload['user_id'] ?? 1,
            'address_id' => $payload['address_id'] ?? null,
            'prescription_id' => $payload['prescription_id'] ?? null,
            'order_number' => Str::upper(Str::random(10)),
            'status' => 'pending',
            'subtotal' => $payload['subtotal'] ?? 0,
            'discount' => $payload['discount'] ?? 0,
            'shipping' => $payload['shipping'] ?? 0,
            'total' => $payload['total'] ?? 0,
            'payment_status' => 'mock_paid',
            'payment_reference' => $payload['payment_reference'] ?? 'MOCK123',
        ]);

        foreach ($payload['items'] ?? [] as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
                'line_total' => $item['line_total'],
            ]);
        }

        return $order->load('items.product');
    }
}
