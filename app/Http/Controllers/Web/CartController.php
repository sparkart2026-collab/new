<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index', [
            'cart' => Cart::with('items.product')->first(),
        ]);
    }
}
