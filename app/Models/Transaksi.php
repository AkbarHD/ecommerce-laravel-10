<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    public $timestamps = true;
    protected $fillable = [
        'code_transaksi',
        'sku_transaksi',
        'total_qty',
        'total_harga',
        'nama_customer',
        'alamat',
        'no_tlp',
        'ekspedisi',
    ];
}
