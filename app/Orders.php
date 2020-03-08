<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $table = 'order_items';

    protected $fillable = [
        'balance','date',
    ];
}
