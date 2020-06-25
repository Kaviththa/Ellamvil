<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Storage;
use Illuminate\Notifications\Notifiable;



class Product extends Model
{
  use Notifiable;

    protected $fillable = [
        'name',
        'description',
        'price',
        'contacts',
        'category_id',
        'product_type_id'
        
    ];
    protected $dates = ['expire_at'];

    protected $casts = [
        'new' => 'boolean',
        'negotiable' => 'boolean',
        
    ];
    

    
}

