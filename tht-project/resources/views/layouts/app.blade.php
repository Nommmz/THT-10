<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <nav>
        <!-- Add your responsive navigation menu -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Blog. All Rights Reserved.</p>
    </footer>
</body>
</html>
