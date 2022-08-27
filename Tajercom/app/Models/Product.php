<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'user_id',
        'user_name',
        'product_name',
        'product_img',
        'product_price',
        'product_dec',
    ];
}
