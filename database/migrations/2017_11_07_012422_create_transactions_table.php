<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('from_user_id');
            $table->integer('to_user_id');
            $table->string('amount')->default('$ 0.00');
            $table->string('message')->nullable();
            $table->string('status');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
