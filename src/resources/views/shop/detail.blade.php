@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="shop-detail-container">

    <!-- 店舗情報 -->
    <div class="shop-detail-left">
        <div class="shop-header">
            <a href="{{ url('/') }}" class="back-btn">&lt;</a>
            <h2>{{ $shop->name }}</h2>
        </div>
        <img src="{{ asset($shop->image_path) }}" alt="{{ $shop->name }}" class="shop-detail-img">

        <p class="shop-tags">#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>
        <p class="shop-description">{{ $shop->description }}</p>
    </div>

    <!-- 予約フォーム -->
    <div class="shop-detail-right">
        <div class="reservation-card">
            <h3>予約</h3>
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">

                <input type="date" name="date" value="{{ old('date') }}">
                    @error('date')
                        <div class="error-message">{{ $message }}</div>
                    @enderror

                <select name="time">
                    <option value="">-- 時間を選択してください --</option>
                    @for ($hour = 0; $hour < 24; $hour++)
                        @php
                            $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00';
                        @endphp
                        <option value="{{ $formattedHour }}" {{ old('time') == $formattedHour ? 'selected' : '' }}>
                            {{ $formattedHour }}
                        </option>
                    @endfor
                </select>
                @error('time')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                <select name="number">
                    <option value="">-- 人数を選択してください --</option>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ old('number') == $i ? 'selected' : '' }}>
                            {{ $i }}人
                        </option>
                    @endfor
                </select>
                @error('number')
                    <div class="error-message">{{ $message }}</div>
                @enderror

                {{-- 予約履歴 --}}
                @if(Auth::check())
                    <div class="reservation-history">
                        @if($reservations->isEmpty())
                            <p>予約 0件</p>
                        @else
                            @foreach($reservations as $index => $reservation)
                                <div class="reservation-detail-card">
                                    <p>Shop：{{ $reservation->shop->name }}</p>
                                    <p>Date：{{ $reservation->date }}</p>
                                    <p>Time：{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</p>
                                    <p>Number：{{ $reservation->number }}人</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endif

                @if(Auth::check())
                    <button type="submit" class="reserve-btn">予約する</button>
                @else
                    <a href="{{ route('login') }}" class="reserve-btn">ログインして予約する</a>
                @endif
            </form>
        </div>
    </div>

</div>
@endsection