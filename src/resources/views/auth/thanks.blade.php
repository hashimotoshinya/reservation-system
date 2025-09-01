@extends('layouts.app2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('title', '登録完了')

@section('content')
    <main class="main">
        <div class="card">
            <div class="card-body">
                <h1>会員登録ありがとうございます</h1>
                <div class="button-area">
                    <a href="{{ route('login') }}" class="btn-submit">ログインする</a>
                </div>
            </div>
        </div>
    </main>
@endsection