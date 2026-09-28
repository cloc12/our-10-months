<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GiftUnlocked
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->cookie('gift_unlocked') !== 'yes') {
            return redirect()->route('gift.unlock');
        }

        return $next($request);
    }
}