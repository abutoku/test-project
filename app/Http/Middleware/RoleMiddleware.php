<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */

    // 追加したミドルウェア
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->role == 'admin') {
            return $next($request);
        }

        return redirect()->route('dashboard');
    }
}
