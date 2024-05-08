<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $hidden = ['pivot'];
    protected $fillable = [
        'name',
        'value',
        'category_id'
    ];

    public function accessories() : BelongsToMany
    {
        return $this->belongsToMany(Accessory::class);
    }
}
