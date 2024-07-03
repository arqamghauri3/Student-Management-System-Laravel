<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('viewDashboard')->middleware('checkUserSession');
Route::post('/', [UserController::class, 'loginValidate'])->name('loginVal');
Route::get('/signout', [UserController::class, 'signout'])->name('signout');


Route::get('/attendance', [StudentController::class, 'viewAttendance'])->name('viewAttend')->middleware('checkUserSession');
Route::get('/marks', [StudentController::class, 'viewMarks'])->name('viewMarks')->middleware('checkUserSession');
Route::put('/profile/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::get('/profile', [StudentController::class, 'viewProfile'])->name('viewProfile')->middleware('checkUserSession');
Route::get('/fetch-attendance', [AttendanceController::class, 'fetchAttendance'])->name('fetchAttendance');
Route::get('/fetch-marks', [GradeController::class, 'fetchGrades'])->name('fetchGrades');


Route::get('/faculty/addAttendance', [FacultyController::class, 'addAttendance'])->name('addAttendance')->middleware('checkUserSession');
Route::get('/faculty/viewAttendance', [FacultyController::class, 'viewAttendance'])->name('viewAttendance')->middleware('checkUserSession');
Route::post('/faculty/addAttendance', [FacultyController::class, 'storeAttendance'])->name('storeAttendance')->middleware('checkUserSession');
Route::get('/faculty/viewGrades', [FacultyController::class, 'viewGrades'])->name('faculty.viewGrades')->middleware('checkUserSession');
Route::put('/faculty/{attendance}/update', [FacultyController::class, 'updateAttendance'])->name('updateAttendance');
Route::get('/faculty/profile', [FacultyController::class, 'viewProfile'])->name('faculty.profile')->middleware('checkUserSession');
Route::put('/faculty/{faculty}/updateFaculty', [FacultyController::class, 'updateProfile'])->name('faculty.update')->middleware('checkUserSession');
Route::get('/faculty/fetch-attendance', [AttendanceController::class, 'fetchFacultyAttendance'])->name('fetchAttendance');


Route::get('/admin/viewAttendance', [AdminController::class, 'viewAttendance'])->name('admin.viewAttendance')->middleware('checkUserSession');
Route::get('/admin/viewStudents', [AdminController::class, 'viewStudents'])->name('admin.viewStudents')->middleware('checkUserSession');
Route::get('/admin/viewFaculty', [AdminController::class, 'viewFaculty'])->name('admin.viewFaculty')->middleware('checkUserSession');
Route::get('/admin/addCourse', [AdminController::class, 'addCourse'])->name('admin.addCourse')->middleware('checkUserSession');
Route::post('/admin/addCourse', [AdminController::class, 'storeCourse'])->name('admin.storeCourse')->middleware('checkUserSession');
Route::get('/admin/assignCourse', [AdminController::class, 'viewAssignCourse'])->name('admin.viewAssignCourse')->middleware('checkUserSession');
Route::post('/admin/assignCourse', [AdminController::class, 'assignCourse'])->name('admin.assignCourse')->middleware('checkUserSession');
Route::get('/admin/viewCourse', [AdminController::class, 'viewCourse'])->name('admin.viewCourse')->middleware('checkUserSession');



