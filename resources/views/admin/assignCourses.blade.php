<x-admin-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">Assign Courses</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <form enctype="multipart/form-data" action="{{route('admin.assignCourse')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <select class="form-select" name="courseID">
                                        @foreach ($courses as $course)
                                            <option value="{{$course->courseID}}">{{$course->courseName}}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label" for="courseName">Course Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <select class="form-select" name="facultyID">
                                        @foreach ($faculty as $facult)
                                            <option value="{{$facult->facultyID}}">{{$facult->firstName}} {{$facult->lastName}}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label" for="courseCode">Faculty Name</label>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-secondary btn-rounded btn-block">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
