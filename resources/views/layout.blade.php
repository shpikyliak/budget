<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Статті бюджетів</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    @yield('scripts')
</head>
<body>
<header>
    <p id="head_name">
        Управління бюджетом


    @if(Auth::check())
        <div style="float: right; padding: 0">
            <a style="color: white; font-size: 18px; display: inline" href="/logout"> Вийти </a>
            <p style="color: #b0b0b0; display: inline">{{Auth::user()->name}}</p>
        </div>

    @else
        <a style="float: right; color: white; font-size: 18px" href="/login"> Увійти </a>
        @endif
        </p>
</header>
@include('navbar')

<div class="my-content">
    @include('flash::message')

    @yield('content')
</div>
</body>
</html>