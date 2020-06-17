<?php

namespace App\Http\Middleware;

use Closure;

class checkToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $validToken = Guests::where('token', session('token'))->first();
        if($validToken !== null)
        {
            return redirect('');
        }
        return $next($request);
    }
}
