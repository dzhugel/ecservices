<!doctype html>
<html class="no-js" lang="en">
<head>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>{ec}services | решения для интернет-бизнеса</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/js/prettyPhoto_3.1.5/prettyPhoto.css" type="text/css" media="screen">
<?php if(Yii::app()->request->url=='/portfolio'){ ?>
<link rel="stylesheet" href="/js/isotope/css/style.css" type="text/css" media="screen">
<?php } ?>
<link href="/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css" media="screen">
<script type="text/javascript" src="/js/modernizr.custom.48287.js"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/apple-touch-fa-57x57-precomposed.png">
<link rel="shortcut icon" href="/favicon.png">
</head>
<body<?php echo !in_array(Yii::app()->request->url,array('/','/portfolio','/blog')) ? ' class="collapsing_header"' : ''; ?>>
<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header"><a class="navbar-brand" href="/"> <img src="/images/restart_logo.png" alt="optional logo" height="90" width="90"> <span class="logo_title">{ec}<strong>services</strong></span> <span class="logo_subtitle">решения для интернет-бизнеса</span> </a><a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="nb_left pull-left"> <span class="fa fa-reorder"></span></span> <span class="nb_right pull-right">menu</span> </a></div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
						 <li<?php echo Yii::app()->request->url=='/' ? ' class="active"' : '';  ?>><a href="/">Главная</a></li>
                         <li<?php echo Yii::app()->request->url=='/about' ? ' class="active"' : '';  ?>><a href="/about">О нас</a></li>
                         <li<?php echo Yii::app()->request->url=='/services' ? ' class="active"' : '';  ?>><a href="/services">Услуги</a></li>
                         <li<?php echo Yii::app()->request->url=='/portfolio' ? ' class="active"' : '';  ?>><a href="/portfolio">Портфолио</a></li>
                         <li<?php echo Yii::app()->request->url=='/blog' ? ' class="active"' : '';  ?>><a href="/blog">Блог</a></li>
                         <li<?php echo Yii::app()->request->url=='/contacts' ? ' class="active"' : '';  ?>><a href="/contacts">Контакты</a></li>
                         <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Демо<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="home_alternative.html">Home Alternative</a></li>
                                   <li><a href="page_alternative.html">Page Alternative</a></li>
                                   <li><a href="gallery.html">Portfolio Masonry</a></li>
                                   <li><a href="portfolio_item.html">Portfolio Item</a></li>
                                   <li><a href="portfolio_item_2.html">Portfolio Item II</a></li>
                                   <li><a href="single_post.html">Single Post</a></li>
                                   <li><a href="404.html">ERROR 404</a></li>
                                   <li><a href="register.html">Register or Sign in</a></li>
                                   <li><a href="elements.html">Design Elements</a></li>
                                   <li><a href="documentation/index.html">Documentation <span class="label label-danger">new</span></a></li>
                              </ul>
                         </li>
                    </ul>
               </div>
          </div>
          <div id="social_media_wrapper"> <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/leonartgr"><i class="fa fa-twitter"></i></a> <a href="#googleplus"><i class="fa fa-google-plus"></i></a> </div>
          <div id="sign"><a href="register.html"><i class="fa fa-user"></i><span>Register/Sign in</span></a></div>
     </div>
</header>
<?php echo $content; ?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="/js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script>
<script type="text/javascript" src="/js/snap.svg-min.js"></script>
<script type="text/javascript" src="/js/restart_theme.js"></script>
<script type="text/javascript" src="/js/collapser.js"></script>
</body>
</html>	