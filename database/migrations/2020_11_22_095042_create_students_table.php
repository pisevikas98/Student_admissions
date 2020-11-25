<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('address');
            $table->string('gender');
            $table->string('photo');
            $table->string('sign');
            $table->string('college_name');
            $table->string('branch');
            $table->string('passing_year');
            $table->string('clg_address');
            $table->string('hsc');
            $table->string('ssc');
            $table->string('leaving');
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
        Schema::dropIfExists('students');
    }
}
