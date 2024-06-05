<?php

namespace App\Http\Resources\Accessory;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'image_url' => $this->image_url,
            'dimensions' => $this->dimensions,
            'weight' => $this->weight,
            'type' => $this->type,
            'category_id' => $this->category_id,
            'manufacturer_id' => $this->manufacturer_id,
        ];
    }
}
