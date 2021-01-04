<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class checkAdmin
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
        $dataclient = Session::get('clientdata');
        if ($dataclient != null && str_contains($dataclient,'@admin.com')) {
            return $next($request);
        } elseif ($dataclient != null && !str_contains($dataclient,'@admin.com')) {
            return redirect('/index');
        } else {
            return redirect('/');
        }
    }
}
