<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessory extends Model
{
    use HasFactory;
    use SoftDeletes;

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
