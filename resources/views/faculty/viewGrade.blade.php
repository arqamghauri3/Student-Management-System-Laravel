<x-faculty-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Grades</h4>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Student</th>
                            <th>Total Marks</th>
                            <th>Obtained Marks</th>
                        </thead>
                        <tbody>
                            @foreach ($grades as $grade)
                                <tr>
                                    <td>{{ $grade->name }}</td>
                                    <td>{{ $grade->courseName }}</td>
                                    <td>{{ $grade->firstName }} {{ $grade->lastName }}</td>
                                    <td>{{ $grade->totalMarks }}</td>
                                    <td>{{ $grade->obtainedMarks }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-faculty-dashboard>
