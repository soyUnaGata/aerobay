<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drone extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }
}
