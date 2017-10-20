<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('headHTML')
        @include('layouts.partials.headHTML')
    @stop
</head>
<body>
    @yield('content')
</body>
</html>