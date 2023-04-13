<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<div class="wrapper">
    <div class="auth-bar-line">
        <div class="container">
            <div class="auth-bar">
                @guest
                    <div class="auth-bar-item ml-auto">
                        <a class="auth-bar-link text-white text-uppercase text-bold text-13" href="{{ route('login') }}">Login</a>
                    </div>
                    <div class="auth-bar-item">
                        <a class="auth-bar-link text-white text-uppercase text-bold text-13" href="{{ route('register') }}">Register</a>
                    </div>
                @endguest
                @auth
                    @if(Auth::user()->is_admin === 1)
                        <div class="auth-bar-item ml-auto">
                            <a class="auth-bar-link text-white text-uppercase text-bold text-13" href="{{ route('orders') }}">Admin Panel</a>
                        </div>
                    @endif
                    <div class="auth-bar-item @if(Auth::user()->is_admin !== 1) ml-auto @endif">
                        <a class="auth-bar-link text-white text-uppercase text-bold text-13" href="{{ route('person.orders.index') }}">{{ Auth::user()->name }} <i class="fa-solid fa-user"></i></a>
                    </div>
                    <div class="auth-bar-item">
                        <a class="auth-bar-link text-white text-uppercase text-bold text-13" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </div>
                @endauth
            </div>
            @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endauth
        </div>
    </div>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('main') }}">
                        <img class="navbar-logo" src="{{ asset('img/logo.svg') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link h-s text-uppercase active" aria-current="page" href="{{ route('catalog') }}">Jibbitz</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-fav">
                        <a href="" class="favorites">
                            <i class="fa-solid fa-heart"></i>
                            <span class="favQuantity text-12 text-black text-bold">0</span>
                        </a>
                    </div>
                    <div class="navbar-cart">
                        <a href="{{ route('cart') }}" class="cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="cartQuantity text-12 text-white text-bold">
                                @if (session()->has('productsCount'))
                                    {{ session()->get('productsCount') }}
                                @else
                                    {{ '0' }}
                                @endif
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="content">
        @if (session()->has('success'))
            <p>{{ session()->get('success') }}</p>
        @endif
        @yield('content')
    </div>
    <footer>
        <div class="section footer">
            <div class="container">
                <div class="footer-filling">
                    <a>Site map</a>
                    <p>© 2023 Jibz.me, DOO</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
