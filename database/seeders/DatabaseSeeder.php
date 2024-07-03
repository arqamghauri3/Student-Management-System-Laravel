<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'arqamghauri3',
                'password' => '123',
                'role' => 'student',
            ],
            [
                'username' => 'student2',
                'password' => '123',
                'role' => 'student',
            ],
            [
                'username' => 'faculty1',
                'password' => '123',
                'role' => 'faculty',
            ],
            [
                'username' => 'faculty2',
                'password' => '123',
                'role' => 'faculty',
            ],
            [
                'username' => 'admin',
                'password' => '123',
                'role' => 'admin',
            ],

        ]);



        DB::table('students')->insert([
            [
                'profilePic' => 'student1.jpg',
                'firstName' => 'John',
                'lastName' => 'Doe',
                'email' => 'john@example.com',
                'phone' => '1234567890',
                'userID' => '1',
            ],
            [
                'profilePic' => 'student2.jpg',
                'firstName' => 'Jane',
                'lastName' => 'Doe',
                'email' => 'jane@example.com',
                'phone' => '0987654321',
                'userID' => '2',

            ],
        ]);

        DB::table('faculty')->insert([
            [
                'profilePic' => 'faculty1.jpg',
                'firstName' => 'Professor',
                'lastName' => 'Smith',
                'email' => 'prof@example.com',
                'phone' => '9876543210',
                'userID' => '3',

            ],
            [
                'profilePic' => 'faculty2.jpg',
                'firstName' => 'Dr.',
                'lastName' => 'Johnson',
                'email' => 'dr@example.com',
                'phone' => '1230987654',
                'userID' => '4',

            ],
        ]);

        DB::table('courses')->insert([
            [
                'courseCode' => 'CS101',
                'courseName' => 'Introduction to Computer Science',
            ],
            [
                'courseCode' => 'ENG201',
                'courseName' => 'English Composition',
            ],
        ]);

        DB::table('student_courses')->insert([
            [
                'courseID' => 1,
                'studentID' => 1,
            ],
            [
                'courseID' => 2,
                'studentID' => 2,
            ],
        ]);

        DB::table('faculty_courses')->insert([
            [
                'courseID' => 1,
                'facultyID' => 1,
            ],
            [
                'courseID' => 2,
                'facultyID' => 2,
            ],
        ]);

        DB::table('grades')->insert([
            [
                'name' => 'Midterm',
                'totalMarks' => 100,
                'obtainedMarks' => 85,
                'courseID' => 1,
                'studentID' => 1,
                'facultyID' => 1,
            ],
            [
                'name' => 'Final',
                'totalMarks' => 100,
                'obtainedMarks' => 75,
                'courseID' => 2,
                'studentID' => 1,
                'facultyID' => 1,
            ],
        ]);

        DB::table('attendance')->insert([
            [
                'date' => '2024-05-10',
                'status' => 'Present',
                'studentID' => 1,
                'courseID' => 1,
                'facultyID' => 1,
            ],
            [
                'date' => '2024-05-10',
                'status' => 'Absent',
                'studentID' => 2,
                'courseID' => 2,
                'facultyID' => 2,
            ],
        ]);
    }
}
