@extends('layouts.navbar')
@section('content')
<h1 class="mt-5" style="font-weight:bolder; margin-left:5%;">廣告DEMO展示</h1>
    <div class="container">
       
        <div class="row" style="height:100%;">
            <div class="col d-flex " style="justify-content:center; height:100%;margin-top:25rem!important;">
                    <div style="text-align:center;"> 
                        <h1>展示型廣告</h1>
                            <a href="{{ url('/test/image') }}">
                             <i class="far fa-images fa-7x" style="color:black"></i>
                            </a>
                        </div>
                     
                        <div style="margin-top:-150px; text-align:center;"> 
                                <h1>原生廣告</h1>
                            <a href="{{ url('/test/text') }}" class="itemMenu ">
                            <i class="far fa-file-alt fa-7x" style="color:black;"></i>
                            </a>
                        </div>
                        <div style="text-align:center;"> 
                         <h1>影音廣告</h1>
                          
                                <i class="fas fa-video fa-7x" style="color:black"></i></i>
                             </a>
                         </div>
                     </div>
             </div>
   
         </div>

         
     </div>
 @endsection