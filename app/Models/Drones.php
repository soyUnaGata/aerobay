<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drones extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'image_url',
        'count',
        'category_id',
        'manufacturer_id'
    ];
}
