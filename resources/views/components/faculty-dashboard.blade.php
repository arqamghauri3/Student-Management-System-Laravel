<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        @media (max-width: 767.98px) {
            #sidebarNav {
                width: 100%;
            }
        }

        body {
            font-family: 'Poppins';
        }

        #side {
            background: #0A153E;
        }

        #side ul li:active {
            background: white;
            color: black;
        }

        #side ul li:hover {
            background: white;
            color: black;
        }

        #side ul li {
            color: white;

        }

        #side ul li a {
            color: inherit;
        }

        .custom-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <section id="headerBar" class="bg-dark text-white">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h3 class="text-center py-3 m-0 fw-bold d-none d-md-block">Dashboard</h3>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>{{ session('user_username') }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="{{ route('faculty.profile') }}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('signout') }}">Sign out</a></li>
                    </ul>
                </div>

            </div>

        </nav>
    </section>
    <div class="bodyContent d-flex">
        <section id='sidebarNav' class="collapse d-md-flex">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh" id="side">
                <a href="#"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Faculty</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    @include('faculty.sidebar')
                </ul>
                <hr>
            </div>
        </section>
        <section id="dashboardContent" class="flex-grow-1">
            {{ $slot }}
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function viewAttendance(courseID, facultyID) {
            $.ajax({
                url: '/faculty/fetch-attendance',
                type: 'GET',
                data: {
                    courseID: courseID,
                    facultyID: facultyID
                },
                success: function(data) {
                    populateAttendanceTable(data)
                }
            });
        }

        function viewMarks(courseID, studentID) {
            $.ajax({
                url: '/fetch-marks',
                type: 'GET',
                data: {
                    courseID: courseID,
                    studentID: studentID
                },
                success: function(data) {
                    populateMarksTable(data);
                }
            });
        }
    </script>

    <script>
function populateAttendanceTable(attendanceData) {
    var table = document.getElementById('attendanceTable');
    table.innerHTML = '';

    var headerRow = table.insertRow();
    headerRow.innerHTML = '<th>Student Name</th><th>Date</th><th>Status</th>';

    attendanceData.forEach(function(attendance) {
        var row = table.insertRow();
        row.innerHTML = '<td>' +
            attendance.firstName + ' ' + attendance.lastName + '</td>' +
            '<td>' + attendance.date + '</td>' +
            '<td>' +
            '<form action="/faculty/' + attendance.attendanceID + '/update" method="post">' +
            '@method("put") @csrf' +
            '<select name="status" onchange="this.form.submit()">' +
            '<option value="' + attendance.status + '">' + attendance.status + '</option>' +
            '<option value="Present">Present</option>' +
            '<option value="Absent">Absent</option>' +
            '<option value="Late">Late</option>' +
            '</select>' +
            '</form>' +
            '</td>';
    });
}

        function populateMarksTable(marksData) {
            var table = document.getElementById('attendanceTable');
            table.innerHTML = '';

            var headerRow = table.insertRow();
            headerRow.innerHTML = '<th>Name</th><th>Total Marks</th><th>Obtained Marks</th>';

            marksData.forEach(function(marks) {
                var row = table.insertRow();
                row.innerHTML = '<td>' + marks.name + '</td><td>' + marks.totalMarks + '</td><td>' + marks
                    .obtainedMarks + '</td>';
            });

        }
    </script>

</body>

</html>
