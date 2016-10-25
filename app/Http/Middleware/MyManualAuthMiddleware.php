<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 25/10/16
 * Time: 19:54
 */

namespace App\Http\Middleware;


class MyManualAuthMiddleware
{

    public function handle($request, Closure $next)
    {
        if ($request->has('id')){
            return $next($request);

        }
        dd("BBB");
        redirect('login');
    }

}
}