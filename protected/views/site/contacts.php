<div class="full_page_photo"><div id="map"></div></div>
<div class="main">
     <div class="container">
          <section class="hgroup">
               <h1>Контакты</h1>
               <h2>This is a subtitle used optionally for explaining more...</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="/">Главная</a> </li>
                    <li class="active">Контакты</li>
               </ul>
          </section>
          <section>
               <div class="row">
                    <div class="office_address col-sm-4 col-md-4">
                         <div class="team_member">
                         	<img src="/images/restart_logo.png" width="90" height="90" alt="logo">
                         	<h5>{re}start, HTML</h5>
                              <small>Web-Development Company</small><br><br>
                              <div class="team_social"> <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/leonartgr"><i class="fa fa-twitter"></i></a> <a href="#pinterest"><i class="fa fa-linkedin"></i></a> <a href="https://github.com/PlethoraThemes"><i class="fa fa-github-alt"></i></a> </div>
                              <address>
                              <strong></strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title="Phone">P:</abbr> (123) 456-7890
                              </address>
                              <address>
                              <abbr title="Phone">E:</abbr> <a href="mailto:#">first.last@example.com</a>
                              </address>
                         </div>
                    </div>
                    <div class="contact_form col-sm-8 col-md-8">
                         <form name="contact_form" id="contact_form" method="post">
                              <div class="row">
                                   <div class="col-sm-6 col-md-6">
                                        <label>Name</label>
                                        <input name="name" id="name" class="form-control" type="text" value="">
                                   </div>
                                   <div class="col-sm-6 col-md-6">
                                        <label>E-mail</label>
                                        <input name="email" id="email" class="form-control" type="text" value="">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-12 col-md-12">
                                        <label>Subject</label>
                                        <input name="subject" id="subject" class="form-control" type="text">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-12 col-md-12">
                                        <label>Message</label>
                                        <textarea name="message" id="message" rows="8" class="form-control"></textarea>
                                   </div>
                                   <div class="col-sm-12 col-md-12"><br/>
                                        <a id="submit_btn" class="btn btn-primary" name="submit">Submit Message</a> <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span> </div>
                              </div>
                         </form>
                    </div>
               </div>
          </section>
     </div>
     <?php $this->renderPartial('_footer'); ?>
</div>
<script type="text/javascript" src="/js/modernizr.custom.48287.js"></script>
<!-- 
You need to include this script on any page that has a Google Map BEFORE the restart_theme.js.
When using Google Maps on your own site you MUST signup for your own API key at:
https://developers.google.com/maps/documentation/javascript/tutorial#api_key
After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9dpgKXojmHke4mK4UHXLaqE6n898nHwo&sensor=false"></script>
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
	      // The latitude and longitude to center the map (always required)
	      // You can find it easily at http://universimmedia.pagesperso-orange.fr/geo/loc.htm	  
	      var myLatlng = new google.maps.LatLng(51.50852, -0.1254); // London
	      
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,
		// Disable scrollwheel zooming on the map
		scrollwheel: false,                    
                    center: myLatlng,

                    // How you would like to style the map. 
                    // This is where you would paste any style. For example paste a style found on Snazzy Maps. 
                     styles: [{'featureType':'water','stylers':[{'visibility':'on'},{'color':'#428BCA'}]},{'featureType':'landscape','stylers':[{'color':'#f2e5d4'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#c5c6c6'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#e4d7c6'}]},{'featureType':'road.local','elementType':'geometry','stylers':[{'color':'#fbfaf7'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#c5dac6'}]},{'featureType':'administrative','stylers':[{'visibility':'on'},{'lightness':33}]},{'featureType':'road'},{'featureType':'poi.park','elementType':'labels','stylers':[{'visibility':'on'},{'lightness':20}]},{},{'featureType':'road','stylers':[{'lightness':20}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen up in the <body>
                var mapElement = document.getElementById('map');
	      
                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
	      
	      // Put a marker at the center of the map
	      var marker = new google.maps.Marker({
      		position: myLatlng,
      		map: map,
      		title: 'We are right here!'
  		});
            }
</script>