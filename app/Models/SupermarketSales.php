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
        'invoice_id', 
        'branch', 
        'city', 
        'customer_type', 
        'gender', 
        'product_line', 
        'unit_price', 
        'quantity', 
        'tax_5', 
        'total', 
        'date', 
        'time', 
        'payment', 
        'cogs', 
        'gross_margin_percentage', 
        'gross_income', 
        'rating'
    ];
}
