<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class VerifyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function verify($token)
    {
        $user = User::where('email_token', $token)->firstOrFail()->verified();

        if (\Illuminate\Support\Facades\Auth::user()) {
            return redirect('dashboard')->with('message', 'Email confirmed!');
        }

        return redirect('login')->with('message', 'Email confirmed!');
    }
}
