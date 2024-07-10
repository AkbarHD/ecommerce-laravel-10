<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'sku',
        'nama_product',
        'type',
        'kategory',
        'harga',
        'discount',
        'quantity',
        'quantity_out',
        'foto',
        'is_active',
    ];

    protected $hidden;
}
