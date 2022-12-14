<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T-shirt Production</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center mt-3">Tshirt Dashboard</h1>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (Session::has('danger'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ Session::get('danger') }}
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
