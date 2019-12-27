@extends('layouts.navbar')
@section('content')
<div id="page-main" style="width:90%;  margin-left: auto;margin-right: auto;margin-bottom: 30px;padding-top: 15px;position: relative;">
      
            <div id="breadcrumbs">
                    <a href="http://clickforce.com.tw">首頁</a>
         > <a href="http://www.clickforce.com.tw/page/multiforce_technology?lid=70">產品技術</a> > <a href=""> 廣告DEMO展示</a> > <a href="">影音廣告</a>
    </div>
            </div>  
    <style>
    .btn{
        border: 0px;
        background-color: white;
        font-size: 20px;
        margin-top: 10px;
    }
    @media only screen and (max-width: 600px){
        #f1{
            display: none;
        }
        #open-button{
            display: none;
        }
        #PcinPc_movie970250, #PcinPc_movie300600,#PcinMB_movie300600,#PcinPc_movie300250,#PCinMB_movie300250,#PcinMB_covermovie,#PcinMB_uprightmovie,#PcinPc_970250,#PcinMB_i300250,#PcinMB_floatvideo{
            display: none;
        }
        #MBinPc_movie970250,#MBinPc_movie300600,#MBinMB_movie300600,#MBinPc_movie300250,#MBinMB_movie300250,#MBinMB_covermovie,#MBinMB_uprightmovie,#MBinPc_970250,#MBinMB_i300250,#MBinMB_floatvideo{
            display: block !important;
        }

    }
    </style>	
        <div class="container-fluid" style="height:1000px;" >
                <div class="row "style="height:100%;" >
                        <div class="col-4">
                             <div class="menu-wrap">  
                                    <nav class="menu" >
                                        <div class="icon-list">
                                            <h1 class="border-bottom"style="color:black; font-size:40px; ">影音廣告</h1>
                                            {{-- <a class="btn "  style="text-align:left;"href="{{ url('/test/index?movie970250') }}" target="_blank">影音摩天970X250</a> --}}
                                              <div class="btn-group dropright">
                                                <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    影音摩天970X250
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" id="PcinPc_movie970250"href="{{ url('/test/index?movie970250') }}" target="_blank">PC</a>
                                                  <a class="dropdown-item" id="MBinPc_movie970250"href="{{ url('/test/MB_index?movie970250') }}" style="display:none;" target="_blank">PC</a>
                                                  <div class="dropdown-divider"></div>                                              
                                                </div>
                                              </div>

                                             <div class="btn-group dropright">
                                                <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        影音摩天300X600
                                                </button>
                                                <div class="dropdown-menu">
                                                  <a class="dropdown-item" id="PcinPc_movie300600"href="{{ url('/test/index?movie300600') }}" target="_blank">PC</a>
                                                  <a class="dropdown-item" id="MBinPc_movie300600"href="{{ url('/test/MB_index?movie300600') }}" style="display:none;"target="_blank">PC</a>
                                                  <div class="dropdown-divider"></div>     
                                                  <a class="dropdown-item" id="PcinMB_movie300600" onclick="movie300600()">Mobile</a>    
                                                  <a class="dropdown-item" id="MBinMB_movie300600" href="{{ url('/test/index?movie300600') }}" style="display:none;"target="_blank">Mobile</a>                                         
                                     
                                                </div>
                                              </div>
                                            {{-- <a class="btn " style="text-align:left;" href="{{ url('/test/index?movie300600') }}" target="_blank">影音摩天300X600</a> --}}
                                            <div class="btn-group dropright">
                                                    <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            影音摩天X300250
                                                    </button>
                                                    <div class="dropdown-menu">
                                                      <a class="dropdown-item" id="PcinPc_movie300250" href="{{ url('/test/index?movie300250') }}" target="_blank">PC</a>
                                                      <a class="dropdown-item" id="MBinPc_movie300250" href="{{ url('/test/MB_index?movie300250') }}" style="display: none;" target="_blank">PC</a>

                                                      <div class="dropdown-divider"></div>     
                                                      <a class="dropdown-item" id="PCinMB_movie300250" onclick="movie300250()">Mobile</a>    
                                                      <a class="dropdown-item" id="MBinMB_movie300250"href="{{ url('/test/index?movie300250') }}" style="display: none;" target="_blank">Mobile</a>                                                    
                                                    </div>
                                                  </div>
                                            {{-- <a class="btn " style="text-align:left;" onclick="movie300250()">影音摩天X300250</a> --}}
                                            <div class="btn-group dropright" >
                                                    <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            影音蓋板
                                                    </button>
                                                    <div class="dropdown-menu">
                                                            <a class="dropdown-item" id="PcinMB_covermovie" onclick="covermovie()">Mobile</a>    
                                                            <a class="dropdown-item" id="MBinMB_covermovie" href="{{ url('/test/index?covermovie') }}" style="display: none;" target="_blank">Mobile</a>    
                                                      <div class="dropdown-divider"></div>     
                                                                                  
                                                    </div>
                                                  </div>
                                            <br>
                                            {{-- <a class="btn "  style="text-align:left;"onclick="covermovie()">影音蓋板</a> --}}
                                            <div class="btn-group dropright">
                                                    <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            直立式影音
                                                    </button>
                                                    <div class="dropdown-menu">
                                                            <a class="dropdown-item" id="PcinMB_uprightmovie" onclick="uprightmovie()">Mobile</a>    
                                                            <a class="dropdown-item" id="MBinMB_uprightmovie"href="{{ url('/test/index?uprightmovie') }}" style="display: none;" target="_blank">Mobile</a>    
                                                      <div class="dropdown-divider"></div>     
                                                                                  
                                                    </div>
                                                  </div>
                                            {{-- <a class="btn "  style="text-align:left;"onclick="uprightmovie()">直立式影音</a> --}}
                                                    
                                                     <div class="btn-group dropright">
                                                            <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    隨身影音970X250
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                    <a class="dropdown-item" id="PcinPc_970250" href="{{ url('/test/index?970250') }}" target="_blank">PC</a>    
                                                                    <a class="dropdown-item" id="MBinPc_970250" href="{{ url('/test/MB_index?970250') }}" style="display:none;" target="_blank">PC</a>    
                                                              <div class="dropdown-divider"></div>     
                                                            </div>
                                                          </div>
                                            {{-- <a class="btn " style="text-align:left;" href="{{ url('/test/index?970250') }}" target="_blank">隨身影音970X250</a> --}}
                                            <div class="btn-group dropright">
                                                    <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            隨身影音300X250
                                                    </button>
                                                    <div class="dropdown-menu">
                                                            <a class="dropdown-item" id="PcinMB_i300250"onclick="i300250()">Mobile</a>    
                                                            <a class="dropdown-item" id="MBinMB_i300250"href="{{ url('/test/index?300250') }}" style="display: none;" target="_blank">Mobile</a>    
                                                      <div class="dropdown-divider"></div>     
                                                    </div>
                                                  </div>
                                            {{-- <a class="btn " onclick="i300250()" style="text-align:left;">隨身影音300X250</a> --}}
                                            <div class="btn-group dropright">
                                                    <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            漂浮影音
                                                    </button>
                                                    <div class="dropdown-menu">
                                                            <a class="dropdown-item" id="PcinMB_floatvideo"onclick="floatvideo()">Mobile</a>    
                                                            <a class="dropdown-item" id="MBinMB_floatvideo"href="{{ url('/test/index?floatvideo_mb') }}" style="display: none;" target="_blank">Mobile</a>    

                                                      <div class="dropdown-divider"></div>     
                                                    </div>
                                                  </div>
                                            {{-- <a class="btn " style="text-align:left;" onclick="floatvideo()" target="_blank">漂浮影音</a> --}}

                                               
                                                
                                               
                                        </div>
                                     </nav>
                                            <button class="close-button"  id="close-button">></button>
                             </div>
                         </div>
 
                <button class="menu-button" id="open-button">Open Menu</button>
                    <div class="col-8" style="max-width:725px; " >
                        <div class="container" >
                             <iframe id="f1"src="{{ url('/test/demoview') }}" frameborder="0"style="height:100%; width:100%; margin-left:-29%; " scrolling=no></iframe>  
                      <div style="background-image:url('https://s3-ap-northeast-1.amazonaws.com/cdn.doublemax.net/image/creative/20190102/%E5%A4%A7C-%E8%BD%89%E6%AD%A3.png');    background-repeat: no-repeat;
                      background-size: 350px;
                      height:100%;
                      background-position:right center; opacity: 0.4; margin-top:-160%;margin-left:300px;">
                        <h1 style="display:none;">12343345</h1>
                    </div>
                    
                     </div>
                         
                </div>
        </div>
        
        <script>
                function movie300600()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?movie300600') }}"
                }
                function i300250()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?300250') }}"
                }
                function floatvideo()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?floatvideo') }}"
                }

                function movie300250()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?movie300250') }}"
                }
                function uprightmovie()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?uprightmovie') }}"
                }
                function covermovie()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?covermovie') }}"
                }
                function fullscreenzip()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?fullscreenzip') }}"
                }
                </script>
	
        @endsection