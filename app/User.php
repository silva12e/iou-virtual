<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'balance'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transaction()
    {
    	return $this->hasMany('App\Transaction');
    }

    public function payee()
    {
        return $this->hasMany('App\User', 'id');
    }
}
