<x-admin-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Attendance</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Course</th>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->firstName }} {{ $attendance->lastName }}</td>
                                    <td>{{ $attendance->date }}</td>
                                    <td>{{ $attendance->status }}</td>
                                    <td>{{ $attendance->courseName }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
