<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index', [
            'cart' => Cart::with('items.product')->first(),
            'addresses' => Address::query()->where('user_id', 1)->get(),
        ]);
    }

    public function confirmation()
    {
        return view('checkout.confirmation');
    }
}
