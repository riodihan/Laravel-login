<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', $title)</title>
</head>

<body>
    <div class="container">
        <h1>@yield('title', $title)</h1>
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('password.action') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="">
                                Old Password <span class="text-danger">*</span>
                            </label>
                            <input class="form-control" type="password" name="old_password" />
                        </div>
                        <div class="mb-3">
                            <label for="">
                                New Password <span class="text-danger">*</span>
                            </label>
                            <input class="form-control" type="password" name="new_password" />
                        </div>
                        <div class="mb-3">
                            <label for="">
                                New Password Confirmation <span class="text-danger">*</span>
                            </label>
                            <input class="form-control" type="password" name="new_password_confirmation" />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">Change Password</button>
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
