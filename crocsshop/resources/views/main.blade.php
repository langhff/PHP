@extends('master')

@section('title', 'Main')
@section('content')
    <div class="section home-banner">
        <div class="container">
            <div class="home-banner-filling">
                <h3 class="banner-text-1 h-xl text-white text-uppercase">End of the season</h3>
                <h3 class="banner-text-2 h-xxl text-uppercase">Sale</h3>
                <h3 class="banner-text-3 text-30 text-white">Up to 50% Off Select Styles!*</h3>
                <a href="{{ route('catalog') }}">
                    <button class="button-white text-20 text-bold">Shop All Sale</button>
                </a>
            </div>
        </div>
    </div>
    <div class="section home-slider">
        <div class="container">
            <h3 class="text-30">Up to 50% off</h3>
            <a class="text-black">End of season sale</a>
            <div class="owl-carousel owl-theme main-carousel-1">
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack1.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack1.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack2.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack3.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack4.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack5.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack6.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack7.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack8.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack9.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="card productcard">
                                    <img src="{{ asset('img/pack10.avif') }}" class="card-img-top" alt="...">
                                    <div class="card-body productcard-body">
                                        <p class="card-text productcard-name">Classic Clog</p>
                                        <p class="card-text productcard-price">$29.99</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
@endsection
