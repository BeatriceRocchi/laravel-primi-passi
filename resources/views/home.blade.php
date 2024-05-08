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

    {{-- FontAwesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
        integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=='
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
        <div class="d-flex flex-column align-items-center justify-content-center">
            <img src="{{ $logo }}" alt="Logo Laravel" class="w-25">
            <h1 class="text-center my-4">Hello Laravel</h1>
            <p class="text-center fst-italic">made with <i class="fa-solid fa-heart"></i> by {{ $name }}
                {{ $surname }}
            </p>
        </div>
    </div>
</body>

</html>
