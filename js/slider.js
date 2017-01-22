/**
* DOM ready
*/
jQuery(function() { 
      var jQueryitem = jQuery('.carousel .item'); 
      var jQuerywHeight = jQuery(window).height();
      jQueryitem.eq(0).addClass('active');
      jQueryitem.height(jQuerywHeight); 
      jQueryitem.addClass('full-screen');

      jQuery('.carousel img').each(function() {
        //var jQuerysrc = jQuery(this).attr('src');/*ovde menjam src, postaviti rucno*/
        var jQuerycolor = jQuery(this).attr('data-color');
        jQuery(this).parent().css({
          //'background-image' : 'url(' + jQuerysrc + ')',
          'background-color' : jQuerycolor
        });
        jQuery(this).remove();
      });

      jQuery(window).on('resize', function (){
        jQuerywHeight = jQuery(window).height();
        jQueryitem.height($wHeight);
      });

      jQuery('.carousel').carousel({
        interval: 6000,
        pause: "false"
      });
});