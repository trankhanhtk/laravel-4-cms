<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Công Ty TNHH Xuyên Á</title>
<meta name="Keywords" content="○○○○,○○○○,○○○○,○○○○,○○○○" />
<meta name="description" content="○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○" />
<meta name="robots" content="index,follow" />
<meta name="format-detection" content="telephone=no"/>
<!--OGP-->
<meta property="og:title" content="○○○○○○○○○○"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="○○○○○○○○○○○○○○○○○○○○" />
<meta property="og:url" content="http://www.○○○○.com/"/>
<meta property="og:image" content="http://www.○○○○.com/images/ogp.jpg" />
<meta property="og:site_name" content="○○○○"/>
<meta property="og:email" content="info@○○○○.com"/>
<meta property="og:phone_number" content="00-0000-0000"/>
<!--/canonical-->
<link rel="canonical" href="http://www.○○○○.com/" />
<!--/favicon-->
<link rel="shortcut icon" href="images/favicon.ico" />
<!--css-->
<link rel="stylesheet" type="text/css" href="/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/module.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="/css/slider-index.css" media="all" />
</head>
<body id="Top">
<div id="Content-wrap">
    <div id="Top-content">
        <div class="grid-1000 pt-20">
            <div id="Jslidernews1" class="lof-slidecontent ac-contents" style="width:1000px; height:577px;"> 
                
                <!-- MAIN CONTENT -->
                <div class="main-slider-content" style="width:695px; height:405px;">
                    <ul class="sliders-wrap-inner">
                        <?php $i = 0; ?>
                        @foreach ($menu->galleries as $gallery)
                            @if ($i < 4)
                                @foreach ($gallery->images as $image)
                                    <li>
                                        <img src="{{$image->url}}">
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                    <ul class="sub-menu cf">
                        <li><a href="#">Phòng khách</a></li>
                        <li><a href="#">Phòng ngủ</a></li>
                        <li><a href="#">Phòng trẻ em</a></li>
                        <li><a href="#">Phòng vệ sinh</a></li>
                        <li><a href="#">Bếp</a></li>
                        <li class="last"><a href="#">Góc nhà đẹp</a></li>
                    </ul>
                </div>
                <!-- END MAIN CONTENT --> 
                <!-- NAVIGATOR -->
                <div class="navigator-content">
                    <div  class="button-previous alpha">Previous</div>
                    <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                            @foreach ($menu->galleries as $gallery)
                                @if ($i < 4)
                                    @foreach ($gallery->images as $image)
                                        <li>
                                            <img width=700 height=405 src="{{$image->thumb_url}}">
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach
<!--                             <li><img src="../images/index/thumb_mv01.jpg" /></li>
                            <li><img src="../images/index/thumb_mv02.jpg" /></li>
                            <li><img src="../images/index/thumb_mv03.jpg" /></li>
                            <li><img src="../images/index/thumb_mv04.jpg" /></li>
                            <li><img src="../images/index/thumb_mv05.jpg" /></li>
                            <li><img src="../images/index/thumb_mv01.jpg" /></li> -->
                        </ul>
                    </div>
                    <div class="button-next alpha">Next</div>
                </div>
            </div>
        </div>
        <!-- / .grid-1000 --> 
    </div>
    <!-- / #Top-content --> 
</div>
<!-- Container --> 
<!-- javascript --> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="/js/opacity-rollover2.1.js"></script> 
<script type="text/javascript" src="/js/common.js"></script> 
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script> 
<script language="javascript" type="text/javascript" src="/js/script.js"></script> 
<script type="text/javascript">
 $(document).ready( function(){ 
        // buttons for next and previous item                        
        var buttons02 = { previous:$('#Jslidernews1 .button-previous') ,
                        next:$('#Jslidernews1 .button-next') };         
         $('#Jslidernews1').lofJSidernews( { interval : 4000,
                                            direction       : 'opacitys',   
                                            easing          : 'easeInOutExpo',
                                            duration        : 1200,
                                            auto            : true,
                                            maxItemDisplay  : 5,
                                            navPosition     : 'horizontal', // horizontal
                                            navigatorHeight : 122,
                                            navigatorWidth  : 186,
                                            mainWidth       : 695,
                                            buttons         : buttons02 } );    
            
    });
</script>
</body>
</html>
