<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rese')</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <div class="logo">
                @auth
                    <a href="{{ url('/menu1') }}" class="menu-icon">☰</a>
                @else
                    <a href="{{ url('/menu2') }}" class="menu-icon">☰</a>
                @endauth
                <span class="title">Rese</span>
            </div>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>
</body>
</html>