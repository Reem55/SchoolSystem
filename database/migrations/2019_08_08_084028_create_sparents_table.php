<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSparentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sparents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('code');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_name');
            $table->string('password');
            $table->string('mobile_number1');
            $table->string('mobile_number2');
            $table->string('address');
            $table->unsignedInteger('student_id');
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
        Schema::dropIfExists('sparents');
    }
}
