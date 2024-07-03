<x-admin-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">Add Courses</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <form enctype="multipart/form-data" action="{{route('admin.storeCourse')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="courseName" class="form-control">
                                    <label class="form-label" for="courseName">Course Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="courseCode" class="form-control">
                                    <label class="form-label" for="courseCode">Course Code</label>
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
