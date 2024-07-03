<x-studentDashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Attendance</h4>
                    </div>
                    <div>
                        @foreach ($studentCourses as $studentCourse)
                            <button class="text-decoration-none p-3" id="{{ $studentCourse->courseID }}"
                                onclick="viewAttendance({{ $studentCourse->courseID }},{{ $studentCourse->studentID }})"
                                style="color: inherit; background-color: #0A153E">{{ $studentCourse->courseCode }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <table class="table" id="attendanceTable">
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-studentDashboard>
