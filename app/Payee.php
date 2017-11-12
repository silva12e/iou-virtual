<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Payee extends Model
{
    protected $fillable = ['username', 'payer_id', 'payee_id'];

  	public function user()
  	{
  		return $this->belongsTo('app\user', 'payee_id');
  	}

}
