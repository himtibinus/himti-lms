<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDetail;

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
        //dd($request);
        $request->session()->regenerate();

        $user = User::where('email', $request->email)
        ->orWhere('name', $request->name)
        ->orWhere('phone', $request->phone)
        ->first();

        $user_id = UserDetail::where('roleID', $user->id)->first();

        if($user_id->roleID == 1){
            return redirect()->intended(RouteServiceProvider::HOMEADMIN);
        }
        else if($user_id->roleID == 2){
            return redirect()->intended(RouteServiceProvider::HOMEAKTIVIS);
        }
        else if($user_id->roleID == 3){
            return redirect()->intended(RouteServiceProvider::HOMEMANAGER);
        }       

        // return redirect()->intended(RouteServiceProvider::HOME);
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
