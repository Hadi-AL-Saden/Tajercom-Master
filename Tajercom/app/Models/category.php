<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'category_name',
        'category_img',

    ];
    // public function category_content()
    // {
    //     return $this->hasOne('App\category');
    // }
}
