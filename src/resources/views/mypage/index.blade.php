@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage-container">

    <h2 class="mypage-title">{{ Auth::user()->name }} さんのマイページ</h2>

    <div class="mypage-content">

        {{-- 予約一覧 --}}
        <section class="mypage-section">
            <div style="display:flex; align-items:center; gap:12px;">
                <h3 class="section-title">予約状況</h3>
                @if(session('success'))
                    <div class="flash-message">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="card-list">
                @if($reservations->isEmpty())
                    <p>予約 0件</p>
                @else
                    @foreach($reservations as $index => $reservation)
                        <div class="mypage-card reservation-card">
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">✖︎</button>
                            </form>

                            <h4>予約 {{ $index + 1 }}</h4>
                            <p>Shop：{{ $reservation->shop->name }}</p>
                            <p>Date：{{ $reservation->date }}</p>
                            <p>Time：{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
                            <p>Number：{{ $reservation->number }}人</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

        {{-- お気に入り一覧 --}}
        <section class="mypage-section">
            <h3 class="section-title">お気に入り店舗</h3>
            <div class="card-list favorites">
                @if($favorites->isEmpty())
                    <p>お気に入り 0件</p>
                @else
                    @foreach($favorites as $shop)
                        <div class="favorite-card">
                            <img src="{{ asset($shop->image_path) }}" alt="{{ $shop->name }}">
                            <h4>{{ $shop->name }}</h4>
                            <p>#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>

                            <div class="card-actions">
                                <a href="{{ route('shops.show', $shop->id) }}" class="detail-btn">詳しくみる</a>
                                <form action="{{ route('favorites.toggle', $shop->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="like-btn">❤️</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

    </div>
</div>
@endsection