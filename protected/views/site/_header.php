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