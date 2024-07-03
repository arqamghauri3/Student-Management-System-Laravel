<x-studentDashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Profile</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <form enctype="multipart/form-data" action="{{ route('student.update',$student->studentID) }}" method="POST" >
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="firstName" class="form-control" name="firstName"
                                        value="{{$student->firstName}}">
                                    <label class="form-label" for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="lastName" class="form-control" name="lastName"
                                        value="{{$student->lastName}}">
                                    <label class="form-label" for="lastName">Last Name</label>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="email" class="form-control" name="email"
                                        value="{{$student->email}}">
                                    <label class="form-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="phone" class="form-control" name="phone"
                                        value="{{$student->phone}}">
                                    <label class="form-label" for="phone">Phone</label>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-secondary btn-rounded btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-studentDashboard>
