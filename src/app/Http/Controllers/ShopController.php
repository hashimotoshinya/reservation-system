<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Shop::with(['area', 'genre']);

        if ($request->filled('area')) {
            $query->where('area_id', $request->area);
        }
        if ($request->filled('genre')) {
            $query->where('genre_id', $request->genre);
        }
        if ($request->filled('keyword')) {
            $query->where('name', 'like', "%{$request->keyword}%");
        }

        $shops = $query->get();
        $areas = Area::all();
        $genres = Genre::all();

        return view('shop.index', compact('shops', 'areas', 'genres'));
    }

    public function show($id)
    {
        $shop = Shop::with(['area', 'genre'])->findOrFail($id);

        $reservations = collect();

        $reservations = [];
        if (auth()->check()) {
            $reservations = auth()->user()
                ->reservations()
                ->where('shop_id', $shop->id)
                ->orderBy('date', 'desc')
                ->orderBy('time', 'desc')
                ->get();
        }

        return view('shop.detail', compact('shop', 'reservations'));
    }
}
