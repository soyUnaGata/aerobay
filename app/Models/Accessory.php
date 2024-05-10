<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use  Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Manufacture;

class Accessory extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $hidden = ['pivot'];

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
        'amount',
        'category_id',
        'manufacturer_id'
    ];

    public function subcategories(): BelongsToMany
    {
        return $this->belongsToMany(Subcategory::class);
    }
}
