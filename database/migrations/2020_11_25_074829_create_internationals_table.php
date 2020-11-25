<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internationals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('country');
            $table->string('nationality');
            $table->string('lang');
            $table->string('address');
            $table->string('state');
            $table->string('postal');
            $table->string('email');
            $table->string('phone');
            $table->string('ed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internationals');
    }
}
