<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    public $table = 'order_items';

    protected $fillable = [
        'quantity','price',
    ];

 
}
