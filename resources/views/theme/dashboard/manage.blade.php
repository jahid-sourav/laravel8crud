@extends('master')
@section('title')
    Manage Blog
@endsection
@section('navbar-brand')
    <a class="navbar-brand" href="{{ route('dashboard') }}" style="width:200px;">
        <img src="{{ asset('/') }}assets/images/dashboard-logo.png" alt="Logo">
    </a>
@endsection
@section('nav-link')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('add-brand') }}">Add Brand</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active-link" href="{{ route('manage-brand') }}">Manage Brand</a>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow border-theme animate__animated animate__fadeInLeft">
                        <div class="card-header bg-dark">
                            <h4 class="text-theme text-center mb-0">Manage Brand</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-striped table-hover">
                                <thead>
                                <tr class="text-center animate__animated animate__fadeInRight">
                                    <th>SN</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Image</th>
                                    <th>Brand Status</th>
                                    <th>Take Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr class="text-center animate__animated animate__fadeInRight">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td width="400px" style="text-align: justify;">{{ $brand->description }}</td>
                                    <td><img src="{{ isset($brand->image) ? asset($brand->image) : '' }}" alt="Brand Logo" height="100px" width="100px" style="object-fit: cover;"></td>
                                    <td>{{ $brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{ route('edit-brand', ['id'=>$brand->id]) }}" class="btn btn-success me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('delete-brand', ['id'=>$brand->id]) }}" onclick="return confirm('Delete This Item?')" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

