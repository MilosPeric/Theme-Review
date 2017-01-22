<?php 

$img = get_field( 'img' );
$title = get_field( 'tiltle' );
$content = get_field( 'content' );
$btn = get_field( 'button' );

?>


<section id="block" class="block block-about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="about-img">
					<img src="<?php echo THEMEURL . 'images/about/about.png' ?>">
				</div>
			</div>

			<div class="col-md-6">
				<div class="about-con">
					<h1><?php echo $title ?></h1>
					<span class="decor"></span>
					<?php echo $content ?>

					<a href="<?php echo get_permalink( 7 ); ?>" class="ani-btn">
						<span class="front"><?php echo $btn ?></span>
						<span class="bottom"><?php echo $btn ?></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>