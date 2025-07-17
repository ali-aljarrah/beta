<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupplyChain extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'is_active',
    ];
}
