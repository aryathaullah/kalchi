<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#FBF1E5">
    <meta name="description" content="@yield('description', 'Kal-Chi, taste of Korean flavour. Kimchi inovatif dari kulit semangka.')">

    <title>@yield('title', 'Kal-Chi | Watermelon, Reimagined')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Playfair+Display:ital,wght@0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack('styles')
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')

        @include('partials.footer')
    </main>

    <script src="{{ asset('js/navbar.js') }}" defer></script>
    @stack('scripts')
</body>
</html>