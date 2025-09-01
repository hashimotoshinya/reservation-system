<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $reservation = auth()->user()->reservations()->create([
            'shop_id' => $request->shop_id,
            'date'    => $request->date,
            'time'    => $request->time,
            'number'  => $request->number,
        ]);


        return redirect()->route('done', ['shop_id' => $reservation->shop_id]);
    }

    public function destroy($id)
    {
        $reservation = auth()->user()->reservations()->findOrFail($id);

        $reservation->delete();

        return redirect()->route('mypage.index')->with('success', '予約を削除しました');
    }
}
