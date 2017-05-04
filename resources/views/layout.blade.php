<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Статті бюджетів</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    @yield('scripts')
</head>
<body>
<header>
    <p id="head_name">
        Управління бюджетом
    </p>
</header>
 @include('navbar')

<div class="my-content">
    @yield('content')
</div>
</body>
</html>