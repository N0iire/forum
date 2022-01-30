<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as ContractLoginResponse;

class LoginResponse implements ContractLoginResponse
{
    public function toResponse($request)
    {
        if (auth()->user()->isAdmin) {
            return redirect()->route('admin.index');
        }
        return redirect()->itended(config('fortify.home'));
    }
}
