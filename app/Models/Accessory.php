<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Accessory extends Model
{
    use HasFactory;
    protected $guarded = false;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'image_url',
        'dimensions',
        'weight',
        'color',
        'type',
        'count',
        'category_id',
        'manufacturer_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
