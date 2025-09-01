<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メール認証</title>
    <link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
    <main class="main">
        <div class="container">
            <p class="message">
                登録していただいたメールアドレスに認証メールを送付しました。<br>
                メール認証を完了してください。
            </p>
            @env('local', 'testing')
                <a href="http://localhost:8025" class="verify-button" target="_blank">認証はこちらから</a>
            @endenv

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <p class="resend">
                    <button type="submit" class="resend-link">認証メールを再送する</button>
                </p>
            </form>

            @if (session('message'))
                <p class="status">{{ session('message') }}</p>
            @endif
        </div>
    </main>
</body>
</html>