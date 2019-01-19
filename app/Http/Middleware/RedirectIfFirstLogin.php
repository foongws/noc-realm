<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfFirstLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user = Auth::user();
        //if (!$user->last_login){
        if (!$user->bio){
             //This will redirect the user to the onboarding area, if they haven't logged in before.
             return redirect('/setup-profile');
        }

        return $next($request);
    }
}