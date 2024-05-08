<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <title>Laravel Primi Passi</title>
</head>

<body>
    <header>
        <nav>
            <ul class="list-unstyled d-flex justify-content-evenly bg-danger py-4">
                <li>
                    <a class="text-decoration-none text-white" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{ route('documentation') }}">Documentation</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container my-5">
        <p class="fs-2 text-center mx-5">Laravel is a web application framework with expressive, elegant syntax. We have
            already laid the foundation — freeing you to create without sweating the small things.
        </p>
    </div>
</body>

</html>
