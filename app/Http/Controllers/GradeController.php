<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function fetchGrades(Request $request)
    {
        $studentID = $request->input('studentID');
        $courseID = $request->input('courseID');
        $marksData = DB::table('grades')
            ->where('studentID', $studentID)
            ->where('courseID', $courseID)
            ->get();

        return response()->json($marksData);
    }
}
