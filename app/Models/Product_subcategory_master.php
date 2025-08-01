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
        'category_name',
        'category_id'
    ];

    protected $primaryKey = 'subcategory_id';

    // Adding One to Many Inverse Relationship 
    // To get data from both the table
    public function categoryData(){
        return $this->belongsTo(Product_category_master::class , 'category_id' , 'category_id');
    }
}
