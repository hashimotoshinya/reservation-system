@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', '店舗一覧')

@section('content')
<div class="search-bar">
    <form action="{{ route('shops.index') }}" method="GET" class="search-form">
        <select name="area" class="search-select">
            <option value="">All area</option>
            @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ request('area') == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>
            @endforeach
        </select>

        <select name="genre" class="search-select">
            <option value="">All genre</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ request('genre') == $genre->id ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>

        <input type="text" name="keyword" class="search-input" placeholder="Search ..." value="{{ request('keyword') }}">
        <button type="submit" class="search-btn">検索</button>
    </form>
</div>

<div class="shop-list">
    @forelse($shops as $shop)
        <div class="shop-card">
            <img src="{{ asset($shop->image_path) }}" alt="{{ $shop->name }}" class="shop-img">
            <div class="shop-content">
                <h3>{{ $shop->name }}</h3>
                <p>#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>

                <div class="shop-actions">
                    <a href="{{ route('shops.show', $shop->id) }}" class="detail-btn">詳しくみる</a>

                    @auth
                        <form action="{{ route('favorites.toggle', $shop->id) }}" method="POST" class="like-form">
                            @csrf
                            <button type="submit" class="like-btn">
                                @if($shop->is_favorited_by(Auth::user()))
                                    ❤️
                                @else
                                    🤍
                                @endif
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="like-btn">🤍</a>
                    @endauth
                </div>
            </div>
        </div>
    @empty
        <p>検索結果 0 件</p>
    @endforelse
</div>
@endsection