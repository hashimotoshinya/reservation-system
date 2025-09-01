<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>オーナーログイン</title>
</head>
<body>
    <h1>オーナーログイン</h1>

    <form method="POST" action="{{ route('owner.login') }}">
        @csrf
        <input type="email" name="email" placeholder="メールアドレス" required><br>
        <input type="password" name="password" placeholder="パスワード" required><br>
        <button type="submit">ログイン</button>
    </form>

    @if ($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif
</body>
</html>