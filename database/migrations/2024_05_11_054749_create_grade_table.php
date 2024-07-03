<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id('gradeID');
            $table->string('name', 100);
            $table->float('totalMarks');
            $table->float('obtainedMarks');
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('studentID');
            $table->unsignedBigInteger('facultyID');
            $table->foreign('courseID')->references('courseID')->on('courses');
            $table->foreign('studentID')->references('studentID')->on('students');
            $table->foreign('facultyID')->references('facultyID')->on('faculty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
