(function($) {  
  var allPanels = $('.accordion > dd').hide();
  var amountScrolled = 700;

   /**
	* Events & links
	*/
	//$( document ).on( 'click', 'open-btn', openNav ); 
	$( document ).on( 'click', '.accordion-section-title', openAccordion ); 
	$( document ).on( 'click', '.nav-btn', borderMenu ); 
	$( window ).on( 'scroll', backToTop );

	

   /**
	* DOM ready
	*/
	$(function() {
      
        /* Google Map */
        $('.acf-map').each(function(){
            map = new_map( $(this) );
        });

	    //matchheight
	    $('.blog .blog-home-con p').matchHeight();

	    $('.left-con, .right-con').matchHeight();//kontejneri
	    //$('.item-con').matchHeight();
	    $('.blog-home-con').matchHeight();
        $('.product_list_widget .product-title').matchHeight();
        $('.height-mat').matchHeight();

        
        if( $('body').hasClass('page-template-template-o-nama')) { 
            //default video-fancybox
            $(".video-light").fancybox({
                'transitionIn' : 'elastic',
                'padding' : 0,
                'autoScale' : false,
                'transitionOut' : 'elastic',
                'type' : 'iframe'
            });        
        }

	    $('.carousel').carousel();

        $('.testimonials').slick({
            nextArrow: '<i class="icon-left"></i>',
            prevArrow: '<i class="icon-right"></i>',
        });

        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
        });

        $(function() {
            $('.top-btn, .scroll-me').click(function() {
            var headerHeight = $('.page-header').innerHeight();
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({ scrollTop: target.offset().top - headerHeight }, 1000);
                    return false;
                }
            }
            });
        });

	}); // DOM

	function openAccordion(e) {
	  event.preventDefault(); 
	  // Grab current anchor value
	  console.log('openAcc');
	  var currentAttrValue = $(this).attr('href');

	  if($(e.target).is('.active')) {
		  close_accordion_section();
	  }else {
		  close_accordion_section();

		  // Add active class to section title
		  $(this).addClass('active');
		  // Open up the hidden content panel
		  $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
	  }

	  e.preventDefault();
	}
	function close_accordion_section() {
		$('.accordion .accordion-section-title').removeClass('active');
		$('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}
	function backToTop( event ) {
	  if ( $(window).scrollTop() > amountScrolled ) {
		$('.top-btn').fadeIn('slow');
	  } else {
		$('.top-btn').fadeOut('slow');
	  }
	}

	function borderMenu( event ) {
	  $('#myNav').toggleClass("border-layer");
	}

	 /*
	*  new_map
	*
	*  This function will render a Google Map onto the selected jQuery element
	*
	*  @type  function
	*  @date  8/11/2013
	*  @since 4.3.0
	*
	*  @param $el (jQuery element)
	*  @return  n/a
	*/

  
	function new_map( $el ) {
	  
	  // var
	  var $markers = $el.find('.marker');

	  var styles = [
		{
		  "featureType": "landscape",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 27.52941176470587
			},
			{
			  "gamma": 1
			}
		  ]
		},
		{
		  "featureType": "road.highway",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 61.39999999999998
			},
			{
			  "gamma": 1
			}
		  ]
		},
		{
		  "featureType": "road.arterial",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 51.19999999999999
			},
			{
			  "gamma": 1
			}
		  ]
		},
		{
		  "featureType": "road.local",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 52
			},
			{
			  "gamma": 1
			}
		  ]
		},
		{
		  "featureType": "water",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 15.92156862745098
			},
			{
			  "gamma": 1
			}
		  ]
		},
		{
		  "featureType": "poi",
		  "stylers": [
			{
			  "hue": "#FF0300"
			},
			{
			  "saturation": -100
			},
			{
			  "lightness": 52
			},
			{
			  "gamma": 1
			}
		  ]
		}
	  ];
	  
	  // vars
	  var args = {
		zoom    : 16,
		scrollwheel: false,
		center    : new google.maps.LatLng(0, 0),
		styles: styles, 
		mapTypeId : google.maps.MapTypeId.ROADMAP
	  };
	  
	  
	  // create map           
	  var map = new google.maps.Map( $el[0], args);
	  
	  
	  // add a markers reference
	  map.markers = [];
	  
	  
	  // add markers
	  $markers.each(function(){
		
		  add_marker( $(this), map );
		
	  });
	  
	  
	  // center map
	  center_map( map );
	  
	  
	  // return
	  return map;
	  
	}

	/*
	*  add_marker
	*
	*  This function will add a marker to the selected Google Map
	*
	*  @type  function
	*  @date  8/11/2013
	*  @since 4.3.0
	*
	*  @param $marker (jQuery element)
	*  @param map (Google Map object)
	*  @return  n/a
	*/

	function add_marker( $marker, map ) {

	  // var
	  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	  // create marker
	  var marker = new google.maps.Marker({
		position  : latlng,
		icon: 'http://tetr.cobaassociates.com/wp-content/uploads/2016/12/map.png',
		map     : map
	  });

	  // add to array
	  map.markers.push( marker );

	  // if marker contains HTML, add it to an infoWindow
	  if( $marker.html() )
	  {
		// create info window
		var infowindow = new google.maps.InfoWindow({
		  content   : $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

		  infowindow.open( map, marker );

		});
	  }

	}

	/*
	*  center_map
	*
	*  This function will center the map, showing all markers attached to this map
	*
	*  @type  function
	*  @date  8/11/2013
	*  @since 4.3.0
	*
	*  @param map (Google Map object)
	*  @return  n/a
	*/

	function center_map( map ) {

	  // vars
	  var bounds = new google.maps.LatLngBounds();

	  // loop through all markers and create bounds
	  $.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	  });

	  // only 1 marker?
	  if( map.markers.length == 1 )
	  {
		// set center of map
		  map.setCenter( bounds.getCenter() );
		  map.setZoom( 16 );
	  }
	  else
	  {
		// fit to bounds
		map.fitBounds( bounds );
	  }

	}

})(jQuery);