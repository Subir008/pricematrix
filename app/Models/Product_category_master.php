<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_category_master extends Model
{
    //
    protected $fillable = [
        'category_name',
        'category_img',
        'category_icon',
        'category_date'
    ];
}
