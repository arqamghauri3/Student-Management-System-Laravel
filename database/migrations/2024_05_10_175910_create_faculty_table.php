<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->id('facultyID');
            $table->string('profilePic', 100)->nullable();
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faculty');
    }
};
