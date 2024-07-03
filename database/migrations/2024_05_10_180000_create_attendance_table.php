<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendanceID');
            $table->date('date');
            $table->enum('status', ['Present', 'Absent', 'Late']);
            $table->unsignedBigInteger('studentID');
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('facultyID');
            $table->foreign('studentID')->references('studentID')->on('students');
            $table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('facultyID')->references('facultyID')->on('faculty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
