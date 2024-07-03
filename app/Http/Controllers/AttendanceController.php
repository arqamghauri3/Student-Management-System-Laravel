<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function fetchAttendance(Request $request)
    {
        $courseID = $request->input('courseID');
        $studentID = $request->input('studentID');

        $attendanceData = DB::table('attendance')
            ->where('courseID', $courseID)
            ->where('studentID', $studentID)
            ->get();

        return response()->json($attendanceData);
    }

    public function fetchFacultyAttendance(Request $request)
    {
        $courseID = $request->input('courseID');
        $facultyID = $request->input('facultyID');

        $attendanceData = DB::table('attendance')
            ->join('students', 'attendance.studentID', '=', 'students.studentID')
            ->where('courseID', $courseID)
            ->where('facultyID', $facultyID)
            ->select('attendance.*', 'students.*')
            ->get();

        return response()->json($attendanceData);
        
    }
    
}
