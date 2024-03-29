<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', $title)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assetsAdmin/images/favicon.ico">

    <!-- App css -->
    <link href="assetsAdmin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assetsAdmin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assetsAdmin/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h1 class="text-muted mt-3">Login</h1>
                            </div>

                            <div class="text-center mb-4">
                                @if (session('success'))
                                    <p class="alert alert-success">{{ session('success') }}</p>
                                @endif
                                @if ($errors->any())
                                    @foreach ($errors->all() as $err)
                                        <p class="alert alert-danger">{{ $err }}</p>
                                    @endforeach
                                @endif
                            </div>

                            <form method="POST" action="{{ route('login.action') }}" class="pt-2">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Username</label>
                                    <input class="form-control" type="text" name="username" value="{{ old('username') }}" placeholder="Enter username">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success" type="submit"> Log In </button>
                                    <a class="btn btn-danger" href="{{ route('home') }}"> Back </a>
                                </div>

                            </form>
                            <!-- end row -->

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="assetsAdmin/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assetsAdmin/js/app.min.js"></script>

</body>

</html>
