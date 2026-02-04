<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $products = Product::query()->where('category_id', $category->id)->paginate(12);

        return view('categories.show', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
