<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservations ?? collect();
        $favorites = $user->favorites()->with('shop')->get();

        return view('mypage.index', compact('user', 'reservations', 'favorites'));
    }
}
