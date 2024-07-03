<x-faculty-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">Add Attendance</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <form enctype="multipart/form-data" action="{{route('storeAttendance')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <select name="studentName" class="form-select">
                                        @foreach ($facultyStudents as $facultyStudent)
                                            <option value="{{$facultyStudent->studentID}}">{{$facultyStudent->firstName}} {{$facultyStudent->lastName}}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label" for="studentName">Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <select name="courseCode" class="form-select">
                                        @foreach ($facultyStudents as $facultyStudent)
                                            <option value="{{$facultyStudent->courseID}}">{{$facultyStudent->courseCode}}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label" for="courseCode">Course Code</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <select name="status" class="form-select">
                                        <option value="Present">Present</option>
                                        <option value="Absent">Absent</option>
                                        <option value="Late">Late</option>
                                    </select>
                                    <label class="form-label" for="status">Status</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="date" name="date" class="form-control">
                                    <label class="form-label" for="date">Date</label>
                                    <input type="hidden" name="studentID" value="{{$facultyStudent->studentID}}">
                                    <input type="hidden" name="facultyID" value="{{$facultyStudent->facultyID}}">
                                    <input type="hidden" name="courseID" value="{{$facultyStudent->courseID}}">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-secondary btn-rounded btn-block">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-faculty-dashboard>
