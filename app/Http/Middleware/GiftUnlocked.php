<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GiftUnlocked
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('gift_unlocked')) {
            return redirect()->route('gift.unlock');
        }

        return $next($request);
    }
}