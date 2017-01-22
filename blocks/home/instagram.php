<?php 

$nesto = get_field( 'title_video_video' );

?>

<section class="block-instagram">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="instagram-con">
						<div class="header-con">
							<h1><?php echo 'Video Galerija' ?></h1>
							<span class="decor"></span>
						</div>

						<div class="instagram">
							<?php echo do_shortcode( '[instagram-feed]' ); ?>
						</div>
				</div>
			</div>
		</div>
	</div>		
</section>