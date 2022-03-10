<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('images/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    @include('layout.style')
</head>
<body>
    {{-- @include('sweetalert::alert') --}}
    <div class="app">
        @include('layout.header')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.footer')
    </div>
    @include('layout.script')
</body>
</html>