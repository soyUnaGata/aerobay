<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacture extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    protected $fillable = [
        'name'
    ];

    public function accessories(): HasMany
    {
        return $this->hasMany(Accessory::class);
    }

    public function drone(): HasMany
    {
        return $this->hasMany(Drone::class, 'drone_id', 'id');
    }


}
