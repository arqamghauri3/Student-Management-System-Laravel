<x-admin-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Courses</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Course ID</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Faculty Name</th>
                        </thead>
                        <tbody>
                            @foreach ($facultyCourses as $facultyCourse)
                                <tr>
                                    <td>{{ $facultyCourse->courseID }}</td>
                                    <td>{{ $facultyCourse->courseCode }}</td>
                                    <td>{{ $facultyCourse->courseName }}</td>
                                    <td>{{ $facultyCourse->firstName }} {{ $facultyCourse->lastName }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
