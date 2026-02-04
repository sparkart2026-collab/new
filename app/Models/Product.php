<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'salt',
        'description',
        'price',
        'mrp',
        'stock',
        'prescription_required',
        'image_path',
        'is_active',
    ];

    protected $casts = [
        'prescription_required' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'mrp' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
