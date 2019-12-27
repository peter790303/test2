
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innity Adtech</title>
	<link rel="stylesheet" href="{{ URL::asset('css/1.css') }}">
    <script type="text/javascript" src="1.js"></script>
    <script>
			var adformat = "Mobile Scroll";
			var protocol = (window.location.protocol === undefined) || (window.location.protocol == 'file:')  ? 'http:' : window.location.protocol;
			var sites = {
				"mobile": protocol + "//network.innity.com/adtech/mobile/" + filterString(adformat) +"/",
				"allformats": protocol + "//network.innity.com/adtech/mobile.html",
				"innity": protocol + "//www.innity.com",
				"product": protocol + "//www.innity.com"
			}
			var isMobile = new mobile_detect();
			
		  (function(){
				if(window.innerWidth <= 414 || isMobile.isPhone) {window.location.href = sites.mobile;return;}
			})();
			
			window.onload = function(){
				document.getElementById("format_name").innerHTML = adformat;
				document.getElementById("btn_company").href = sites.innity;
			};
			
		</script>
    
</head>

<body>
 


<div class="device-virtual">
	<div class="device-circle-1"></div>
	<div id="phone_size"><iframe id="frame_con" src="" scrolling="auto" class="frame_container" frameborder="0" tabindex="-1"></iframe></div>

</div>
 <script>
                        var w = location.search;
                        if(w == '?970250'){
                          var a = '{{$a970}}';
                            document.getElementById('frame_con').style.display=a;
                        }
                        if(w == '?300250'){
                          var b= '{{$a300}}';
                          document.getElementById('frame_con').src="{{ url('/test/index?300250') }}";
                          }
                          if(w == '?floatvideo'){
                            var c= '{{$float}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?floatvideo') }}";
                          }
                          if(w == '?fullscreen'){
                            var d= '{{$full}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?fullscreen') }}";
                          }
                          if(w == '?movie300600'){
                            var e= '{{$movie600}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?movie300600') }}";
                          }
                          if(w == '?movie300250'){
                            var e= '{{$movie300}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?movie300250') }}";
                          }
                          
                          if(w == '?movie970250'){
                            var f= '{{$movie970}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?movie970250') }}";
                           }
                          if(w == '?movie300600'){
                            var g= '{{$movie600}}';
                            document.getElementById('movie300600').style.display=g;
                           }
                          if(w == '?uprightmovie'){
                                  var h= '{{$uprightmovie}}';
                                  document.getElementById('frame_con').src="{{ url('/test/index?uprightmovie') }}";
                          }
                          if(w == '?covermovie'){
                                  var i= '{{$covermovie}}';
                                  document.getElementById('frame_con').src="{{ url('/test/index?covermovie') }}";
                          }
                          if(w == '?fullscreenzip'){
                            var j= '{{$fullscreenzip}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?fullscreenzip') }}";
                     }
                          if(w == '?Cover'){
                            var j= '{{$Cover}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?Cover') }}";
                    }
                            if(w == '?banner300250'){
                              var j= '{{$banner300250}}';
                              document.getElementById('frame_con').src="{{ url('/test/index?banner300250') }}";
                      }
                          if(w == '?text300250'){
                            var j= '{{$text300250}}';
                            document.getElementById('frame_con').src="{{ url('/test/index?text300250') }}";
                        }
                        if(w == '?text970250'){
                          var j= '{{$text970250}}';
                          document.getElementById('frame_con').src="{{ url('/test/index?text970250') }}";
                  }
                    </script>
</body>
</body>
</html>
