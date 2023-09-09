<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="icon" type="image/x-icon" href="/img/palawan-logo.webp">
    <title>Its more fun in Palawan!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg mb-3">
        <div class="container-fluid">
            <img src="img/palawan-logo2.webp" alt="Logo" width="80" height="80"
                class="d-inline-block align-text-top mx-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'overview' ? 'activeee' : '' }}" aria-current="page"
                            href="{{ route('overview') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('history', 'trivias', 'population') ? 'activeee' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about') }}">History</a></li>
                            <li><a class="dropdown-item" href="{{ route('trivia') }}">Trivias</a></li>
                            <li><a class="dropdown-item" href="{{ route('population') }}">Population</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'tourist-information' ? 'activeee' : '' }}"
                            href="{{ route('touristInfo') }}">Tourist
                            Information</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('delicacies', 'products') ? 'activeee' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('delicacies') }}">Delicacies</a></li>
                            <li><a class="dropdown-item" href="{{ route('products') }}">Products</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() === 'contact-us' ? 'activeee' : '' }}"
                            href="{{ route('contacts') }}">Contact us</a>
                    </li>
                </ul>
            </div>
            <img src="img/palawan-logo.webp" alt="Logo" width=80" height="80"
                class="d-inline-block align-text-top mx-5">
        </div>
    </nav>
    @yield('content')
</body>

</html>