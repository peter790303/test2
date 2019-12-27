<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    
    public function index(){
        $time = date("Y-m-d H:i:s");   
        return '現在時間'.$time;
    }
}
