@extends('layouts.app2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('title', '会員登録')

@section('content')
    <main class="main">
        <div class="card">
            <div class="card-header">Registration</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf
                    <div class="input-group">
                        <span class="icon">👤</span>
                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" autofocus>
                    </div>
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $message)
                            <div class="error">{{ $message }}</div>
                        @endforeach
                    @endif

                    <div class="input-group">
                        <span class="icon">✉️</span>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        @foreach ($errors->get('email') as $message)
                            <div class="error">{{ $message }}</div>
                        @endforeach
                    @endif

                    <div class="input-group">
                        <span class="icon">🔒</span>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                        @foreach ($errors->get('password') as $message)
                            <div class="error">{{ $message }}</div>
                        @endforeach
                    @endif

                    <div class="input-group">
                        <span class="icon">🔒</span>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        @foreach ($errors->get('password_confirmation') as $message)
                            <div class="error">{{ $message }}</div>
                        @endforeach
                    @endif

                    <div class="button-area">
                        <button type="submit" class="btn-submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection