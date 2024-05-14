<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function subcategory(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }
}
