<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            //role Admin == 1, User == 0

            if (Auth::user()->role == 1) {
                return $next($request);
            } else {
                return redirect('/')->with('error', 'Hozzáférés megtagadva.');
            }
        } else {
            return redirect('/login')->with('error', 'Bejelentkezés szükséges a funkció eléréséhez.');
        }

        return $next($request);
    }
}
