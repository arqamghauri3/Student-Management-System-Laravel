<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCourses;
use App\Models\Attendance;
use App\Models\Courses;
use App\Models\FacultyCourses;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function viewAttendance()
    {
        $userID = session('user_id');
        $attendances = DB::table('attendance')
            ->join('courses', 'attendance.courseID', '=', 'courses.courseID')
            ->join('students', 'attendance.studentID', '=', 'students.studentID')
            ->select('attendance.*', 'courses.*', 'students.*')
            ->get();

        return view('admin.viewAttendance', [
            'attendances' => $attendances,
        ]);
    }


    public function viewStudents()
    {
        $userID = session('user_id');
        $students = DB::table('students')
            ->select('students.*')
            ->get();

        return view('admin.viewStudents', [
            'students' => $students,
        ]);
    }


    public function viewFaculty()
    {
        $userID = session('user_id');
        $faculty = DB::table('faculty')
            ->select('faculty.*')
            ->get();

        return view('admin.viewFaculty', [
            'faculty' => $faculty,
        ]);
    }

    public function addCourse()
    {
        return view('admin.addCourses');
    }

    public function storeCourse(Request $request)
    {
        $course = new Courses();
        $course->courseCode = $request->courseCode;
        $course->courseName = $request->courseName;
        $course->save();

        return redirect(route('admin.viewAssignCourse'));
    }


    public function viewAssignCourse()
    {
        $courses = DB::table('courses')
            ->select('courses.*')
            ->get();

        $faculty = DB::table('faculty')
            ->select('faculty.*')
            ->get();

        return view('admin.assignCourses', [
            'courses' => $courses,
            'faculty' => $faculty

        ]);
    }

    public function assignCourse(Request $request)
    {
        $facultyCourse = new FacultyCourses();
        $facultyCourse->courseID = $request->courseID;
        $facultyCourse->facultyID = $request->facultyID;
        $facultyCourse->save();
        return view('admin.addCourses');
    }


    public function viewCourse()
    {
        $facultyCourse = DB::table('faculty_courses')
            ->join('courses', 'faculty_courses.courseID', '=', 'courses.courseID')
            ->join('faculty', 'faculty_courses.facultyID', '=', 'faculty.facultyID')
            ->select('faculty_courses.*', 'courses.*', 'faculty.*')
            ->get();


        return view('admin.viewCourses', [
            'facultyCourses' => $facultyCourse

        ]);
    }
}
