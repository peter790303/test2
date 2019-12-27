@extends('layouts.navbar')
@section('content')
<div id="page-main" style="width:90%;  margin-left: auto;margin-right: auto;margin-bottom: 30px;padding-top: 15px;position: relative;">
      
            <div id="breadcrumbs">
                    <a href="http://clickforce.com.tw">首頁</a>
         > <a href="http://www.clickforce.com.tw/page/multiforce_technology?lid=70">產品技術</a> > <a href=""> 廣告DEMO展示</a> > <a href="">原生廣告</a>
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
        #PcinPc_text970250,#PcinPc_text300250,#PcinMB_text300250{
            display: none;
        }
        #MBin_Pctext970250,#MBinPc_text300250,#MBinMB_text300250{
            display: block !important;
        }

    }
</style>
 </style>		
        <div class="container-fluid" style="height:1000px;" >
                <div class="row "style="height:100%;" >
                        <div class="col-4">
                             <div class="menu-wrap">  
                                    <nav class="menu" >
                                        <div class="icon-list">
                                                <h1 class="border-bottom"style="color:black;font-size:40px;">原生廣告</h1>
                                                        <div class="btn-group dropright">
                                                                <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                 原生廣告970X250
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" id="PcinPc_text970250" href="{{ url('/test/index?text970250') }}" target="_blank">PC</a>
                                                                  <a class="dropdown-item" id="MBin_Pctext970250" href="{{ url('/test/MB_index?text970250') }}" style="display: none;" target="_blank">PC</a>
                                                                  <div class="dropdown-divider"></div>                                              
                                                                </div>
                                                        </div>
                                                {{-- <a class="btn " style="text-align:left;"href="{{ url('/test/index?text970250') }}" target="_blank">原生廣告970X250</a> --}}
                                                <div class="btn-group dropright">
                                                         <button  class=" dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                 原生廣告300X250
                                                        </button>
                                                                <div class="dropdown-menu">
                                                                  <a class="dropdown-item" id="PcinPc_text300250" href="{{ url('/test/index?text300250') }}" target="_blank">PC</a>
                                                                  <a class="dropdown-item" id="MBinPc_text300250" href="{{ url('/test/MB_index?text300250') }}" style="display:none;" target="_blank">PC</a>
                                                                  <div class="dropdown-divider"></div>                      
                                                                  <a class="dropdown-item" id="PcinMB_text300250"onclick="text300250()" >Mobile</a>
                                                                  <a class="dropdown-item" id="MBinMB_text300250" style="display:none;"href="{{ url('/test/index?text300250') }}"target="_blank">Mobile</a>                        
                                                                 </div>
                                                 </div>
                                                {{-- <a class="btn" style="text-align:left;"href="{{ url('/test/index?text300250') }}" target="_blank">原生圖文300X250</a> --}}
                                               
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
                function text300250(){
                        document.getElementById('f1').src="{{ url('/test/demoview?text300250') }}"
                }
        </script>
	
        @endsection
