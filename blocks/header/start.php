<body <?php body_class() ?>>
    <?php do_action( 'webit_body_start' ) ?>
    
    <div id="page" class="hfeed site">
        <?php do_action( 'webit_page_start' ) ?>
        
        <header id="masthead" class="site-header" role="banner">
            <div class="wrap">
                <div class="header-main">
                    <?php do_action( 'webit_master_head' ) ?>


                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="menu-con">
                                            <?php wp_nav_menu( $args ) ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="wpml-container">
                                            <?php echo do_action('icl_language_selector'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="nav-btn">
                        <div id="nav-icon" onclick="toggle()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span class="menu-title" onclick="toggle()"><?php _e('Menu', 'Ftp')?></span>
                    </div>

                    <script type="text/javascript">
                        function toggle() {
                            var el = document.getElementById("myNav");
                            if ( el.style.width != '100%' ) {
                                el.style.width = '100%';
                            }
                            else {
                                el.style.width  = '0%';
                            }
                        }
                    </script>

                    <div class="border top"></div>
                    <div class="border bottom"></div>

                    <a href="#page" class="top-btn" style="display: inline;"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                    
                </div>
        </header><!-- #masthead -->