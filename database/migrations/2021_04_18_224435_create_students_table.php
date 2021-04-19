<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('registration_no', 20);
            $table->string('room_roll', 5);
            $table->string('class_roll', 5);
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->string('nick_name',20);
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('father_name',40);
            $table->string('mother_name',40);
            $table->string('father_number',20);
            $table->string('mother_number',20);
            $table->string('date_of_birth',20);
            $table->text('address');
            $table->string('image',50);
            $table->string('status',2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
