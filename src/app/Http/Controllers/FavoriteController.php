<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function toggle($shopId)
    {
        $user = Auth::user();
        $shop = Shop::findOrFail($shopId);

        if ($user->favorites()->where('shop_id', $shop->id)->exists()) {
            $user->favorites()->detach($shop->id);
        } else {
            $user->favorites()->attach($shop->id);
        }

        return back();
    }
}
