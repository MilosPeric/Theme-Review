<?php if(ICL_LANGUAGE_CODE=='sr'){ ?>
<section class="block-shop">

		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<div class="shop-con clear">
						<div class="header-con">
							<h1>Shop</h1>

							<span class="decor"></span>
						</div>

						<div class="Shop-grid">
							<div class="container">
							<?php //ftp_theme_wrapper_start(); ?>
							<?php dynamic_sidebar('home_woo_side_bar'); ?>
							<?php //ftp_theme_wrapper_end(); ?>
						
        					<a href="<?php echo get_post_type_archive_link( 'product' ); ?>" class="ani-btn icon-plus">
        						<span class="front"><?php _e( 'Još Produkta' ); ?></span>
        						<span class="bottom"><?php _e( 'Još Produkta' ); ?></span>
        					</a>
                            </div>
                        </div>
                    </div>

                </div>

               
            </div>
		</div>

</section>
<?php }?>