<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\User;

class AccrueVC extends Command
{

    protected $signature = 'accrue:vc';
    protected $description = 'Accrues 0.20VC to all user accounts';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    { 
        $users = User::all();
        
        foreach($users as $user)
        {
            $user->balance = number_format((float) filter_var( $user->balance , FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION) + 0.20, 2);
            $user->save();
        }     
    }
}
