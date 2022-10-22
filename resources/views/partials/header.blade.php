<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/navbar.js') }}"></script>
{{--<script type="text/javascript" src="{{ URL::asset('js/navbarScroll.js') }}"></script>--}}
{{--<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>--}}
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
