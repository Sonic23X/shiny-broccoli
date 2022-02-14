<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $roles = Auth::user()->getRoleNames();

        if ($roles->count() >= 2)
            return redirect(RouteServiceProvider::HOME);
        else if ($roles->count() >= 1 && $roles[0] == User::SYSA)
            return redirect(RouteServiceProvider::SYSA);
        else if ($roles->count() >= 1 && $roles[0] == User::SYSB)
            return redirect(RouteServiceProvider::SYSB);
        else if ($roles->count() >= 1 && $roles[0] == User::SYSC)
            return redirect(RouteServiceProvider::SYSC);
        else
            return redirect()->intended('/logout');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
