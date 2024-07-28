<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminIP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $userIp = $request->ip();
        $allowedIp = "2401:ba80:a380:bea6:17d2:bd2a:ec4d:f7f0";
        // if ($userIp !== $allowedIp) {
        //     return response("You don't have permission to access", 403);
        // }
        return $next($request);
    }
}
