@extends('master')
@section('title')
    Admin - Dashboard
@endsection
@section('navbar-brand')
    <a class="navbar-brand" href="{{ route('dashboard') }}" style="width:200px;">
        <img src="{{ asset('/') }}assets/images/dashboard-logo.png" alt="Logo">
    </a>
@endsection
@section('nav-link')
    <li class="nav-item">
        <a class="nav-link active-link" href="{{ route('add-brand') }}">Add Brand</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('manage-brand') }}">Manage Brand</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="" onclick="event.preventDefault();document.getElementById('logoutForm').submit()">Logout</a>
    </li>
    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
        @csrf
    </form>
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow border-theme animate__animated animate__fadeInLeft">
                        <div class="card-header bg-dark">
                            <h4 class="text-theme text-center mb-0">Add Brand</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-gorup mb-3 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="name" class="form-label">Brand Name</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" id="name" class="form-control border-theme">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-gorup mb-3 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="description" class="form-label">Brand Description</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <textarea name="description" id="description" class="form-control border-theme"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-gorup mb-3 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="image" class="form-label">Brand Image</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="file" name="image" id="image" class="form-control border-theme">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-gorup mb-2 animate__animated animate__fadeInRight">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="form-label">Brand Status</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check me-3">
                                                    <input class="form-check-input" type="radio" name="status" id="publish" value="1">
                                                    <label class="form-check-label form-label-radio" for="publish">
                                                        Publish
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="unpublish" value="0">
                                                    <label class="form-check-label form-label-radio" for="unpublish">
                                                        Unpublish
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-gorup animate__animated animate__fadeInRight">
                                    <div class="row justify-content-end">
                                        <div class="col-lg-9">
                                            <input type="submit" value="Add Brand" class="btn btn-dark text-theme w-100">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
