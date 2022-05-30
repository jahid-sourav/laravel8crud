<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Laravel CRUD Brand || @yield('title')</title>
    @include('includes.style')
</head>
<body>
@include('includes.header')
@yield('body')
@include('includes.script')
@if(Session::has('message'))
    <script>
        $(document).ready(function(){
            toastr.success('{{ Session::get('message') }}');
        });
    </script>
@endif
</body>
</html>
