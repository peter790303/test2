<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    
    public function index($input,$change=null){
        if($change == null){
            $change = 10;
        }
        $value = base_convert($input,10,$change);
        return "結果:$value";
      
  
    }
    // private function valueChange(&$value){
    //     $value[1]='包莖'; 
    //  }
    // private function myfunction($array){
        
    //     return "$array[0]<br>$array[1]";

    // }

}
