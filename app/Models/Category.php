<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function accessory(): HasMany
    {
        return $this->hasMany(Accessory::class, 'accessory_id', 'id');
    }
}
