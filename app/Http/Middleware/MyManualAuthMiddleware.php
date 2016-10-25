<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 25/10/16
 * Time: 19:54
 */

namespace App\Http\Middleware;


use Closure;
use ManualGuard;

class MyManualAuthMiddleware
{

    public function handle($request, Closure $next,ManualGuard $manualGuard)
    {

        if ($manualGuard->check()){
            return $next($request);

        }
        dd("BBB");
        redirect('login');
    }

}
