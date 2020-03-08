<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    public $table = 'photos';

    protected $fillable = [
        'photos'
    ];
}
