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
            <nav class="nav-menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-link">Logout</button>
                            </form>
                        </li>
                        <li><a href="{{ url('/mypage') }}">Mypage</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>
</body>
</html>
</html>