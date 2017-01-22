<?php



namespace Local;



add_action( 'init', '\Local\register' );

add_action( 'wp_enqueue_scripts', '\Local\deregister', 900 );

add_action( 'webit_enqueue_scripts', '\Local\enqueue' );

// add_action( 'login_enqueue_scripts', '\Local\login_enqueue' );

// add_action( 'admin_enqueue_scripts', '\Local\admin_enqueue' );



/**

* Register local scripts and styles

*

* @hooked init

* @return void

*/ 

function register()

{

    //wp_register_style( 'local-login', THEMEURL . 'style-login.css' );



    //wp_register_style( 'local-reset', THEMEURL . 'css/reset.css' );

    wp_register_style( 'local-font', THEMEURL . 'font/stylesheet.css' );

    wp_register_style( 'local-real', THEMEURL . 'css/real-style.css' );

    wp_register_style( 'local-responsive', THEMEURL . 'css/real-responsive.css', array( 'local-real' ) );





    #FONT AWESOME

    //wp_register_style('font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' );



    #FONTELO

    wp_register_style( 'local-fontello', THEMEURL . 'css/fontello/css/fontello.css' );



    #FONT AWESOME

    wp_register_style( 'font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');



    #BOOTSTRAP

    wp_register_style( 'local-bootstrap', THEMEURL . 'css/bootstrap.css' );

    wp_register_script( 'local-bootstrap-js', THEMEURL . 'js/bootstrap.js', array( 'jquery' ) );



    #SLICK

    wp_register_style( 'local-slick', THEMEURL . 'css/slick.css' );

    wp_register_script( 'local-slick-js', THEMEURL . 'js/slick.min.js', array( 'jquery' ) );



    #LOCAL

    wp_register_script( 'slider-js', THEMEURL . 'js/slider.js', array( 'jquery' ) );

    wp_register_script( 'local-js', THEMEURL . 'js/local.js', array( 'jquery' ) );



    #google map

    wp_register_script( 'wl-googlemaps-api', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');



    #MATCH HEIGHT - trebace

    wp_register_script( 'local-match-height-js', THEMEURL . 'js/jquery.matchHeight-min.js', array( 'jquery' ) );



    #LIGHTBOX

    wp_register_style( 'local-light', THEMEURL . 'css/jquery.fancybox.css' );

    wp_register_script( 'local-light-js', THEMEURL . 'js/jquery.fancybox.pack.js', array( 'jquery' ) );



    #WOO STARI FAJLOVI

    wp_register_style( 'local-skin', THEMEURL . 'css/woo-stari/skin.css' );
    wp_register_style( 'local-skin-res', THEMEURL . 'css/woo-stari/skin-responsive.css' );
    wp_register_style( 'local-woo-style', THEMEURL . 'css/woo-stari/woo-style.css' );





    #EASING

    //wp_register_script( 'local-easings', THEMEURL . 'js/jquery.easing.1.3.js', array( 'jquery' ) );



    # LOCAL JS

    //wp_register_script( 'local-js', THEMEURL . 'js/local.js', array( 'jquery' ) );

    // wp_localize_script( 'local-js', 'local', array(

    //     'ajaxurl' => admin_url( 'admin-ajax.php' ),

    // ));

}



/**

* Enqueue local scripts and styles

*

* @hooked wp_enqueue_scripts

* @return void

*/ 

function enqueue()

{   

    wp_enqueue_style( 'webit_3rd_fontawesome' );

    wp_enqueue_style( 'local-font' );

    wp_enqueue_style( 'local-fontello' );

    wp_enqueue_style( 'local-slick' );

    wp_enqueue_style( 'local-bootstrap' );

    wp_enqueue_style( 'local-real' );



    wp_enqueue_style( 'local-skin-res' );

    wp_enqueue_style( 'local-skin' );

    wp_enqueue_style( 'local-responsive' );



    //script



    wp_enqueue_script( 'wl-googlemaps-api' );

    wp_enqueue_script( 'local-match-height-js' );

    wp_enqueue_script( 'local-slick-js' );

    wp_enqueue_script( 'local-bootstrap-js' );

    wp_enqueue_script( 'local-easings' );

    wp_enqueue_script( 'slider-js' );

    wp_enqueue_script( 'local-js' );

}



/**

* Enqueue local scripts and styles on login page

*

* @hooked login_enqueue_scripts

* @return void

*/ 

function login_enqueue() 

{

    wp_enqueue_style( 'local-login' );

}



/**

* Deregister other scripts and styles

*

* @hooked init

* @return void

*/ 

function deregister()

{

    //wp_deregister_style( 'webit-style-parent' );

    wp_deregister_style( 'webit-bones' );

    wp_deregister_style( 'webit-nav' );

    //wp_deregister_style( 'local-responsive' );

    

    wp_deregister_style( 'contact-form-7' );

    

    //wp_deregister_style( 'woocommerce-layout' );

    //wp_deregister_style( 'woocommerce-general' );

    //wp_deregister_style( 'woocommerce-smallscreen' );

}

 

/**

*

*

*/

function admin_enqueue()

{

    wp_enqueue_style( 'local_admin', THEMEURL . 'style-admin.css' );

} 