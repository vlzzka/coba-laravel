<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales'; // Nama tabel di database

    protected $fillable = [
        'brand', 
        'processor', 
        'ram_gb', 
        'storage', 
        'gpu', 
        'weight_kg', 
        'price_usd'
    ];
}
