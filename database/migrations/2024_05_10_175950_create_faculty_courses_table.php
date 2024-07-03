<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('faculty_courses', function (Blueprint $table) {
            $table->id('facultyCourseID');
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('facultyID');
            $table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('facultyID')->references('facultyID')->on('faculty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faculty_courses');
    }
};
