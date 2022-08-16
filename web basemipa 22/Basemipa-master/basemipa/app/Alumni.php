<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Alumni extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'name', 'username', 'himpunan', 'placeofbirth', 'dateofbirth', 'gender', 'email', 'phone_number', 'phone_number_guardians', 'religion', 'address', 'address_2', 'tk', 'sd', 'smp', 'sma', 'organization', 'committee', 'development', 'achievement', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
