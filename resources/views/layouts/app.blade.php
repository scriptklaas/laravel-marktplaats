<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Marktplaats - @yield('title')</title>
    </head>
    <body>
        @include('partials.nav')
        @include('partials.errors')
        @yield('content')
    </body>
</html>