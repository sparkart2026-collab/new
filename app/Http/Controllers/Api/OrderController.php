<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return OrderResource::collection(Order::with('items.product')->latest()->get());
    }

    public function store(Request $request, OrderService $orderService)
    {
        $order = $orderService->checkout($request->all());

        return new OrderResource($order);
    }

    public function show(Order $order)
    {
        return new OrderResource($order->load('items.product'));
    }
}
