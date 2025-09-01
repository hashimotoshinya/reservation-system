<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu1</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu1.css') }}">
</head>
<body>
    <div class="menu-container">
        <nav class="menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-link">Logout</button>
                    </form>
                </li>

                <li><a href="{{ url('/mypage') }}">Mypage</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>