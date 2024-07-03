<x-admin-dashboard>
    <div class="container d-flex justify-content-center mt-5">
        <div class="container custom-container">
            <div class="row bg-dark text-white p-3">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="fw-bold">View Faculty</h4>
                    </div>
                </div>
            </div>
            <div class="row text-white p-3" style="background-color: #0A153E">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>Faculty ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </thead>
                        <tbody>
                            @foreach ($faculty as $facult)
                                <tr>
                                    <td>{{ $facult->facultyID }}</td>
                                    <td>{{ $facult->firstName }}</td>
                                    <td>{{ $facult->lastName }}</td>
                                    <td>{{ $facult->email }}</td>
                                    <td>{{ $facult->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-dashboard>
