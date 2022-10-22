<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("partials.header")
</head>
<body>
@include("partials.navbar")
@yield("content")
@include("partials.footer")
</body>
</html>
