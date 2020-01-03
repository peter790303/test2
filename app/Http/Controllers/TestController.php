<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    
    public function index(Request $request,$aaa,$bbb){
        $time = date("Y-m-d H:i:s");
        $array = array($aaa,$bbb);
        $this->valueChange($array);
        return $this->myfunction($array);
    }
    private function valueChange(&$value){
        $value[1]='包莖'; 
     }
    private function myfunction($array){
        
        return "$array[0]<br>$array[1]";

    }

}
