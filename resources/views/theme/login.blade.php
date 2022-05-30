@extends('master')
@section('title')
Admin Login
@endsection
@section('navbar-brand')
    <a class="navbar-brand" href="{{ route('/') }}">
        <img src="{{ asset('/') }}assets/images/logo.png" alt="Logo">
    </a>
@endsection
@section('nav-link')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Resgister</a>
    </li>
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-5 card shadow border-theme animate__animated animate__fadeInLeft">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-theme mb-0">Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="email" class="fw-bolder text-dark">Admin Email</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="email" id="email" name="email" class="form-control border-theme">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="password" class="fw-bolder text-dark">Admin Password</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="password" id="password" name="password" class="form-control border-theme">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group animate__animated animate__fadeInRight">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-9">
                                            <input type="submit" value="Login" class="btn btn-dark text-theme w-100">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h4 class="text-center text-dark mb-3">Don't have any Account?</h4>
                    <div class="text-center">
                        <a href="{{ route('register') }}" class="btn btn-dark text-theme">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
