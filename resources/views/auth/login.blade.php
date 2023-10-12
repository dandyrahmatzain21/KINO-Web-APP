@extends('layouts.app')

@section('content')
    <!--
                    =========================================================
                    * Argon Dashboard 2 - v2.0.4
                    =========================================================

                    * Product Page: https://www.creative-tim.com/product/argon-dashboard
                    * Copyright 2022 Creative Tim (https://www.creative-tim.com)
                    * Licensed under MIT (https://www.creative-tim.com/license)
                    * Coded by Creative Tim

                    =========================================================

                    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
                    -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
        <title>
            Sistem Penilaian
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('template') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('template') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('template') }}/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    </head>

    <body class="">
        <main class="main-content mt-0">
            <section>
                <div class="page-header min-vh-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-auto">
                                <div class="card card-plain">

                                    <div class="card-header pb-0 text-center">
                                        <a class="navbar-brand m-0" href="" target="_blank">
                                            <img width="75%" height="auto"
                                                src="{{ asset('template') }}/assets/img/logo-2.png"
                                                class="navbar-brand-img h-100" alt="main_logo">
                                            {{-- <span class="ms-1 font-weight-bold">E-Performance</span> --}}
                                        </a>
                                    </div>
                                    <div class="card-header pb-0 text-start">
                                        <h1 class="font-weight-bolder">Log<span class="text-gradient text-warning">In</span>
                                        </h1>
                                        <p class="mb-0">Silahkan masukan email dan password</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <input id="email" name="email" type="email"
                                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                    placeholder="Email" aria-label="Email" value="{{ old('email') }}"
                                                    required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <input id="password" name="password" type="password"
                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                    placeholder="Password" aria-label="Password" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-warning btn-lg w-100 mt-4 mb-0">LogIn</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--   Core JS Files   -->
        <script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
        <script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('template') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
    </body>

    </html>
@endsection
