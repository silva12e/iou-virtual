<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{

    protected $fillable =['from_user_id', 'to_user_id','amount','message', 'status' ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id');
    }
}
