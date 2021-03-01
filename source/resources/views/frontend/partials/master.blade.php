<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="http://www.exonhost.com/{{asset('Frontend/images')}}/fbg.png"/>
    <title>@yield('title')</title>
    <link href="{{asset('Frontend/css')}}/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('Frontend/css')}}/mobile.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/png" href="{{asset('Frontend/images')}}/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();

            });


            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });

    </script>
    
    
    

<script type="text/javascript" src="{{asset('Frontend/js')}}/tabcontent.js"></script>
<!-- saw table -->
<link rel="stylesheet" href="{{asset('Frontend/dist')}}/tablesaw.css">
<script src="{{asset('Frontend/dist')}}/dependencies/jquery.js"></script>
<script src="{{asset('Frontend/dist')}}/tablesaw.js"></script>
<script src="{{asset('Frontend/dist')}}/tablesaw-init.js"></script>

<script>
  $(function() {
  
  	$( "#custom-sort" ).data( "tablesaw-sort", function( ascending ) {
  
  		return function( a, b ) {
  
  			// a.cell
  
  			// a.element
  
  			// a.rowNum
  
  			var yearA = a.cell.split( "/" ),
  
  				yearB = b.cell.split( "/" );
  			if( ascending ) {
  				return parseInt( yearA[ 1 ], 10 ) - parseInt( yearB[ 1 ], 10 );
  			} else {
  			// descending
  			return parseInt( yearB[ 1 ], 10 ) - parseInt( yearA[ 1 ], 10 );
  			}
  		};
  	});
  });
  
</script>
 <!-- end saw table -->


</head>
<body>
@include('frontend.partials.header')

{{--@include('frontend.partials.header')--}}
<!--banner -->
@yield('maincontent')
<div class="clear"></div>
<!-- end testimonials -->
<!-- feautres -->
@include('frontend.partials.footer')
<!-- End Global Footer -->
<!--Start of Help.com Live Chat Script-->
<script>
    window.Helpdotcom = window.Helpdotcom || function (a) {
        window.Helpdotcom.q.push(a)
    }, window.Helpdotcom.q = [];
    var d = document, s = d.createElement("script");
    s.type = "text/javascript", s.async = !0, s.src = "//plugins.help.com/livechat.js", s.id = "helpdotcom-script", s.setAttribute("data-org-id", "ccc8aa75-311e-49c7-88a8-8085df34d870"), s.setAttribute("data-widget-id", "8f961332-cdd0-44f1-ae41-cae08e1645f1");
    var x = d.getElementsByTagName("script")[0];
    x.parentNode.insertBefore(s, x);

</script>
<!--End of Help.com Live Chat Script-->
<script>
    (function (w, i, d, g, e, t, s) {
        w[d] = w[d] || [];
        t = i.createElement(g);
        t.async = 1;
        t.src = e;
        s = i.getElementsByTagName(g)[0];
        s.parentNode.insertBefore(t, s);
    })(window, document, '_gscq', 'script', '//widgets.getsitecontrol.com/67481/script.js');
</script>
</body>
</html>

