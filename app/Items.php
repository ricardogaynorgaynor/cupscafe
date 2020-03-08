<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    const ITEM_DIRECTORY = "items";
    public $table = 'items';

    protected $fillable = [
        'quantity','cost','name','digital_id','disability_photo','disability_audio',
    ];
}
