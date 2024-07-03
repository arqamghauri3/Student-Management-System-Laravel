<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\FacultyCourses;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function viewAttendance()
    {
        $userID = session('user_id');
        $faculty = DB::Table('faculty')->where('userID', $userID)->first();
        $facultyID = $faculty->facultyID;
        $facultyCourses = FacultyCourses::where('facultyID', $facultyID)
            ->join('courses', 'faculty_courses.courseID', '=', 'courses.courseID')
            ->select('faculty_courses.*', 'courses.*')
            ->get();

        return view('faculty.viewAttendance', [
            'facultyCourses' => $facultyCourses,
        ]);
    }

    public function updateAttendance($attendanceID, Request $request)
    {
        $attendance = Attendance::find($attendanceID);
        if (!$attendance) {
        }

        $attendance->status = $request->status;
        $attendance->save();
        return redirect(route('viewAttendance'));
    }

    public function addAttendance(){
        $userID = session('user_id');
        $faculty = DB::Table('faculty')->where('userID', $userID)->first();
        $facultyID = $faculty->facultyID;
        $facultyStudents = FacultyCourses::where('facultyID', $facultyID)
            ->join('courses', 'faculty_courses.courseID', '=', 'courses.courseID')
            ->join('student_courses', 'student_courses.courseID', '=', 'courses.courseID')
            ->join('students', 'student_courses.studentID', '=', 'students.studentID')
            ->select('faculty_courses.*', 'courses.*', 'students.*')
            ->get();


        return view('faculty.addAttendance',[
            'facultyStudents' => $facultyStudents
        ]);
    }

    public function storeAttendance(Request $request){
        $attendance = new Attendance();
        $attendance->date = $request->input('date');
        $attendance->status = $request->status;
        $attendance->studentID = $request->studentID;
        $attendance->facultyID = $request->facultyID;
        $attendance->courseID = $request->courseID;
        $attendance->save();

        return redirect(route('viewAttendance'));

    }

    public function viewProfile()
    {
        $userID = session('user_id');
        $faculty = DB::table('faculty')->where('userID', $userID)->first();

        return view('faculty.profile', [
            'faculty' => $faculty,
        ]);
    }

    public function updateProfile($facultyID, Request $request){
        $faculty = Faculty::where('facultyID', $facultyID)->first();
        $faculty->firstName = $request->firstName;
        $faculty->lastName = $request->lastName;
        $faculty->email = $request->email;
        $faculty->phone = $request->phone;
        $faculty->save();

        return redirect(route('faculty.profile'));
    }

    public function viewGrades(){
        $userID = session('user_id');
        $faculty = DB::Table('faculty')->where('userID', $userID)->first();
        $facultyID = $faculty->facultyID;
        $grades = DB::table('grades')->where('facultyID', $facultyID)
        ->join('courses', 'grades.courseID', '=', 'courses.courseID')
        ->join('students', 'grades.studentID', '=', 'students.studentID')
        ->select('grades.*', 'courses.*', 'students.*')
        ->get();

        return view('faculty.viewGrade',[
            'grades' => $grades
        ]);
    }

    

}
