<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupermarketSales extends Model
{
    use HasFactory;
    protected $table = 'supermarket_sales'; // Nama tabel di database

    protected $fillable = 
    [
        
        'branch', 
        'city', 
        'product_line', 
        'quantity', 
        'total', 
        'date', 
        'time', 
        'gross_margin_percentage', 
        'gross_income' 
    ];
}
