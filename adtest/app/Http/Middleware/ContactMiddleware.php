<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContactMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $postal = mb_convert_kana($request->zip01, 'ak', 'UTF-8');

        $request->merge(['postal' => $postal]);
        return $next($request);
    }
}
