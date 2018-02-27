<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header class="navbar navbar-fixed-top navbar-inverse">
    @include("layouts._header")
</header>

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include("layouts._footer")
    </div>
</div>
</body>
</html>