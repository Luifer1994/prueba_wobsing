<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LastSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lasSession = Carbon::parse(Auth::user()->last_session);
        $now = Carbon::now();
        if ($lasSession->diffInDays($now) >= 1) {
            Auth::logout();
            return redirect()->route('showFormLogin');
        }
        return $next($request);
    }
}
