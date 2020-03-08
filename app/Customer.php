<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//Authenticatable,
class Customer extends Model
{
    use Notifiable;
    protected $guard = 'customer';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'customers';

    protected $fillable = [
        'first name', 'last name', 'quota','digital_id','cust_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
