<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function subcategory(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }

    public function drone(): HasMany
    {
        return $this->hasMany(Drone::class, 'drone_id', 'id');
    }
}
