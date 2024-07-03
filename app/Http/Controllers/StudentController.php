<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCourses;
use App\Models\Attendance;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewAttendance()
    {
        $userID = session('user_id');
        $student = Student::where('userID', $userID)->first();
        $studentID = $student->studentID;
        $studentCourses = StudentCourses::where('studentID', $studentID)
            ->join('courses', 'student_courses.courseID', '=', 'courses.courseID')
            ->select('student_courses.*', 'courses.*')
            ->get();

        return view('student.attendance', [
            'studentCourses' => $studentCourses,
        ]);
    }

    public function viewMarks()
    {
        $userID = session('user_id');
        $studentID = Student::where('userID', $userID)->select('studentID');
        $studentCourses = StudentCourses::where('studentID', $studentID)
            ->join('courses', 'student_courses.courseID', '=', 'courses.courseID')
            ->select('student_courses.*', 'courses.*')
            ->get();

        return view('student.marks', [
            'studentCourses' => $studentCourses,
        ]);
    }

    
    public function viewProfile()
    {
        $userID = session('user_id');
        $student = Student::where('userID', $userID)->first();

        return view('student.profile', [
            'student' => $student,
        ]);
    }

    public function update($studentID, Request $request){
        $student = Student::where('studentID', $studentID)->first();
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        return redirect(route('viewProfile'));
    }


}
