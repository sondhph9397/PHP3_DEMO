<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('styles')
</head>

<body>
    <header>
        <h1 class="header">
        @yield('header')
        </h1>
    </header>
    @yield('content')
    <footer>@yield('footer')</footer>
    @yield('scripts')
</body>

</html>