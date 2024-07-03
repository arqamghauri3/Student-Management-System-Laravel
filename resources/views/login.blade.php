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
    </style>
</head>

<body>
    <div class="container mt-5">
        <section class="intro">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <div class="my-md-5 pb-5">

                                        <h1 class="fw-bold mb-3">Login</h1>

                                        <i class="fas fa-user-astronaut fa-3x my-5"></i>
                                        <form action="{{route('loginVal')}}" method="post">
                                            @csrf
                                            <div class="form-outline mb-4">
                                                <input type="text" id="username"
                                                    class="form-control form-control-lg" name="username" />
                                                <label class="form-label" for="username">Username</label>
                                            </div>

                                            <div class="form-outline mb-5">
                                                <input type="password" id="password"
                                                    class="form-control form-control-lg" name="password" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>

                                            <button
                                                class="btn btn-primary btn-lg btn-rounded gradient-custom text-body px-5"
                                                type="submit">Login</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
