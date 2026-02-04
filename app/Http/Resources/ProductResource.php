<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'brand' => $this->brand,
            'salt' => $this->salt,
            'description' => $this->description,
            'price' => $this->price,
            'mrp' => $this->mrp,
            'stock' => $this->stock,
            'prescription_required' => $this->prescription_required,
            'image' => $this->image_path,
            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
