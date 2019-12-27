<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

  <div class="container-fluid" style="height:1000px;" >
                <div class="row "style="height:1000px;" >
                        <div class="col-4">
                             <div class="menu-wrap">  
                                    <nav class="menu" >
                                        <div class="icon-list">
                                                <h1 class="border-bottom "style="color:black;font-size:40px;">圖像</h1>
                                                <a class="btn" style="text-align:left;"onclick="Cover()">蓋板</a>
                                                <a class="btn"style="text-align:left;" onclick="fullscreen()">內文全屏</a>
                                               
                                                <a class="btn"style="text-align:left;" onclick="banner300250()">Banner300X250</a>
                                           
                                               
                                                
                                               
                                        </div>
                                     </nav>
                                            <button class="close-button"  id="close-button">></button>
                             </div>
                         </div>
 
                <button class="menu-button" id="open-button">Open Menu</button>
                    <div class="col-8" style="max-width:725px; height:1000px;" >
                        
                             <iframe id="f1"src="{{ url('/test/demoview') }}" frameborder="0"style="height:1000px; width:100%; margin-left:-29%; " scrolling=no></iframe>  
                              
      
                </div>
        </div>
        <script>
                function fullscreen()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?fullscreen') }}"
                }
                function Cover()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?Cover') }}"
                }
                function banner300250()
                {
                    document.getElementById('f1').src="{{ url('/test/demoview?banner300250') }}";
                    document.getElementById('f1').style.height='1000'+px;
                }
            </script>
</html>