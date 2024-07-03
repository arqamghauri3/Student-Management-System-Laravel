<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id('studentCourseID');
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('studentID');
            $table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('studentID')->references('studentID')->on('students');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
};
