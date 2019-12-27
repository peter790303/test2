<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //

    public function index()
    {   
        $a970='';
        $a300='';
        $float='';
        $float_mb='';
        $full='';
        $movie300='';
        $movie970='';
        $movie600='';
        $uprightmovie='';
        $covermovie='';
        $fullscreenzip='';
        $Cover='';
        $banner300250='';
        $text300250='';
        $text970250='';
        return view('test/index',['a970'=> $a970,
        'a300'=> $a300,
        'float' => $float,
        'float_mb' => $float_mb,
        'full' => $full,
        'movie300' =>$movie300,
        'movie970' =>$movie970,
        'movie600' =>$movie600,
        'uprightmovie' =>$uprightmovie,
        'covermovie'=> $covermovie,
        'fullscreenzip'=>$fullscreenzip,
        'Cover'=>$Cover,
        'banner300250'=>$banner300250,
        'text300250'=>$text300250,
        'text970250'=>$text970250,
        ]);
    }
    public function MB_index()
    {   
        $a970='';
        $a300='';
        $float='';
        $full='';
        $movie300='';
        $movie970='';
        $movie600='';
        $uprightmovie='';
        $covermovie='';
        $fullscreenzip='';
        $Cover='';
        $banner300250='';
        $text300250='';
        $text970250='';
        return view('test/MB_index',['a970'=> $a970,
        'a300'=> $a300,
        'float' => $float,
        'full' => $full,
        'movie300' =>$movie300,
        'movie970' =>$movie970,
        'movie600' =>$movie600,
        'uprightmovie' =>$uprightmovie,
        'covermovie'=> $covermovie,
        'fullscreenzip'=>$fullscreenzip,
        'Cover'=>$Cover,
        'banner300250'=>$banner300250,
        'text300250'=>$text300250,
        'text970250'=>$text970250,
        ]);
    }
    public function i970250()
    {
        return view('test/index?970250',['a970' =>'block' ]);
    }
    public function i300250()
    {
        return view('test/index?300250',[
            'a300' =>'block',
        ]);
    }
    public function floatvideo()
    {
        return view('test/index?floatvideo',[
            'float' =>'block',
        ]);
    }
    public function floatvideo_mb()
    {
        return view('test/index?floatvideo_mb',[
            'float_mb' =>'block',
        ]);
    }
    public function fullscreen()
    {
        return view('test/index?fullscreen',[
            'full' =>'block',
        ]);
    }
    public function movie970250()
    {
        return view('test/index?movie970250',[
            'movie970' =>'block',
        ]);
    }
    public function movie30250()
    {
        return view('test/index?movie30250',[
            'movie300' =>'block',
        ]);
    }
    public function movie300600()
    {
        return view('test/index?movie300600',[
            'movie600' =>'block',
        ]);
    }
    public function uprightmovie()
    {
        return view('test/index?uprightmovie',[
            'uprightmovie' =>'block',
        ]);
    }
    public function covermovie()
    {
        return view('test/index?covermovie',[
            'covermovie' =>'block',
        ]);
    }
    public function fullscreenzip()
    {
        return view('test/index?fullscreenzip',[
            'fullscreenzip' =>'block',
        ]);
    }
    public function Cover()
    {
        return view('test/index?Cover',[
            'Cover' =>'block',
        ]);
    }
    public function banner300250()
    {
        return view('test/demoview?300250banner',[
            '300250banner' =>'block',
        ]);
    }
    public function demoview()
    {   
        $a970='';
        $a300='';
        $float='';
        $full='';
        $movie300='';
        $movie970='';
        $movie600='';
        $uprightmovie='';
        $covermovie='';
        $fullscreenzip='';
        $Cover='';
        $banner300250='';
        $text300250='';
        $text970250='';
        
        return view('test/demoview',['a970'=> $a970,
        'a300'=> $a300,
        'float' => $float,
        'full' => $full,
        'movie300' =>$movie300,
        'movie970' =>$movie970,
        'movie600' =>$movie600,
        'uprightmovie' =>$uprightmovie,
        'covermovie'=> $covermovie,
        'fullscreenzip'=>$fullscreenzip,
        'Cover'=>$Cover,
        'banner300250'=>$banner300250,
        'text300250'=>$text300250,
        'text970250'=>$text970250,
        ]);
    }

    public function demo300()
    {
        return view('test/demoview?300250');
    }
    public function demofloatvideo()
    {
        return view('test/demoview?demofloatvideo',[
            'a300' =>'block',
        ]);
    }
    public function demomovie970250()
    {
        return view('test/demoview?demomovie970250',[
            'movie970' =>'block',
        ]);
    }
    public function demomovie30250()
    {
        return view('test/demoview?demomovie30250',[
            'movie300' =>'block',
        ]);
    }
    public function demomovie300600()
    {
        return view('test/demoview?demomovie300600',[
            'movie600' =>'block',
        ]);
    }
    public function demouprightmovie()
    {
        return view('test/demoview?demouprightmovie',[
            'uprightmovie' =>'block',
        ]);
    }
    public function democovermovie()
    {
        return view('test/demoview?democovermovie',[
            'covermovie' =>'block',
        ]);
    }
    public function demofullscreenzip()
    {
        return view('test/demoview?demofullscreenzip',[
            'fullscreenzip' =>'block',
        ]);
    }
    public function demoCover()
    {
        return view('test/demoview?demoCover',[
            'Cover' =>'block',
        ]);
    }
    public function demobanner300250()
    {
        return view('test/demoview?demo300250banner',[
            '300250banner' =>'block',
        ]);
    }
    public function demotext300250()
    {
        return view('test/demoview?demotext300250',[
            'text300250' =>'block',
        ]);
    }
    public function demotext970250()
    {
        return view('test/demoview?demotext970250',[
            'text970250' =>'block',
        ]);
    }
    public function phone()
    {
        return view('test/phone');
    }
    public function image()
    {
        return view('test/image');
    }
    public function text()
    {
        return view('test/text');
    }
    public function test()
    {
        return view('test/test');
    }
}
