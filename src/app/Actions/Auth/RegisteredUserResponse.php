<?php

namespace App\Actions\Auth;

use Laravel\Fortify\Contracts\RegisterResponse;

class RegisteredUserResponse implements RegisterResponse
{
    public function toResponse($request)
    {
        auth()->logout();

        session()->flash('registered', true);

        return redirect()->route('thanks');
    }
}