<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillables = [
        'name',
        'brand',
        'drive',
        'processor',
        'color',
        'storage',
        'ram',
        'quantity',
        'price',
        'weight',
        'screen',
        'description',
        'images',
        'y_o_m',
        'additionals',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'additionals' => 'array',
        // 'images' => 'array'
    ];
}
