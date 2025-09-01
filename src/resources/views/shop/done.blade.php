@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done-container">
    <div class="done-card">
        <p>ご予約ありがとうございます</p>
        <a href="{{ route('shops.show', ['id' => $shop_id]) }}" class="back-btn">戻る</a>
    </div>
</div>
@endsection