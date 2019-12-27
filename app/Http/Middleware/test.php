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
        // dd($next($request));
     
        if(is_int($test)){
            return $next($request);
        }else{
            return abort('403');
        }
        // if($Minute/2 == 0 ){
        //     dd($Minute/);

        // }else{
        //     dd($time);
        // }
   
 
    }
}
