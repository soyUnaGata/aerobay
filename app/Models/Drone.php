<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'image_url',
        'amount',
        'group_id',
        'manufacturer_id'
    ];
}
