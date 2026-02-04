<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'categories' => Category::query()->where('is_active', true)->limit(6)->get(),
            'featuredProducts' => Product::query()->where('is_active', true)->limit(8)->get(),
        ]);
    }
}
