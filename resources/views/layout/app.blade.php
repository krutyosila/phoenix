<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .bg-white {
            background-color: #FFFFFF;
        }

        .text-bg-orange {
            background-color: #ff4b00;
        }

        .text-orange {
            color: #ff4b00;
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" style="color: #ff4b00">
            <img src="{{ asset('assets/img/only-logo.png') }}" height="40px" alt="">
            Phoenix Labs
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($brands as $brand)
                            <li>
                                <a class="dropdown-item d-flex" href="{{ route('brand', ['id' =>$brand->id]) }}">
                                    {{ $brand->name }}
                                    <span class="badge text-bg-light ms-auto">
                                        {{ $brand->products->count() }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'verification') active @endif"
                       href="{{ route('verification') }}">Verification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif"
                       href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="bg-white shadow-sm rounded">
        @yield('content')
    </div>
    <div class="text-center p-3 small text">
        &copy; Phoenix-Labs {{ date('Y') }}
    </div>
</div>
</body>
</html>
