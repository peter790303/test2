<?php

namespace App\Http\Middleware;

use Closure;
class test
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
    
        date_default_timezone_set("Asia/Taipei");
        $time = date("Y-m-d H:i:s");   
        $Minute = date('i');
        $test = $Minute/2;
     
        if(is_int($test)){
            return $next($request);
        }else{
            return abort('403');
        }
        new JsonResponse();
 
    }
}
