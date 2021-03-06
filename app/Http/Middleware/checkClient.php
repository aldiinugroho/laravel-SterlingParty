<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class checkClient
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
        if ($dataclient == null) {
            return redirect('/');
        } elseif (str_contains($dataclient,'@admin.com')){
            return redirect('adminindex');
        } else {
            return $next($request);
        }
    }
}
