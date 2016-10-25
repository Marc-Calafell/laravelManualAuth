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

class MyManualAuthMiddleware implements Guard
{


    /**
     * MyManualAuthMiddleware constructor.
     */
    public function __construct(ManualGuard $manualGuard)  {
        $this->manualGuard=$manualGuard;

    }

    public function handle($request, Closure $next) {

        if ($this->manualGuard->check()){
            return $next($request);

        }
        dd("BBB");
        redirect('login');
    }

}
