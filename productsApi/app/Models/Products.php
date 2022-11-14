<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['sku', 'name', 'category', 'description', 'main_image', 'other_image', 'stock_number', 'price'];
}
