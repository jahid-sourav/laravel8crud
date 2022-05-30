@extends('master')
@section('title')
    Home
@endsection
@section('navbar-brand')
    <a class="navbar-brand" href="{{ route('/') }}">
        <img src="{{ asset('/') }}assets/images/logo.png" alt="Logo">
    </a>
@endsection
@section('nav-link')
    <li class="nav-item">
        <a class="nav-link active-link" href="{{ route('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Resgister</a>
    </li>
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-lg-4 animate__animated animate__fadeInUp mb-4">
                    <div class="card-theme card shadow border-theme">
                        <img src="{{ isset($brand->image) ? asset($brand->image) : '' }}" alt="Brand Logo" class="card-img-top">
                        <div class="p-2 bg-dark">
                            <h4 class="card-title text-center text-theme"><span class="fw-bolder">{{ $brand->name }}</span></h4>
                            <p class="card-text text-white fw-bolder">{{ $brand->description }}</p>
                        </div>
                        <div class="card-badge bg-theme">
                            <h6 class="fw-bolder text-center">{{ $brand->status == 1 ? 'Published' : 'Unpublished'}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
