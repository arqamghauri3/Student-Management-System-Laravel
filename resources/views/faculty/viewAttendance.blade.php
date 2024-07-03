<x-faculty-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Attendance</h4>
                    </div>
                    <div>
                        @foreach ($facultyCourses as $facultyCourse)
                            <button class="text-decoration-none p-3" id="{{ $facultyCourse->courseID }}"
                                onclick="viewAttendance({{ $facultyCourse->courseID }},{{ $facultyCourse->facultyID }})"
                                style="color: inherit; background-color: #0A153E">{{ $facultyCourse->courseCode }}</button>
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
</x-faculty-dashboard>
