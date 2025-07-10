<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_subcategory_master extends Model
{
    //
    protected $fillable = [
        'subcategory_id',
        'subcategory_name',
        'subcategory_hidden_name',
        'subcategory_img',
        'subcategory_date',
        'category_id',
        'category_name'
    ];

    protected $primaryKey = 'subcategory_id';
}
