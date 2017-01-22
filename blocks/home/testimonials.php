<?php 
$title = get_field( 'title' );

$post_type = 'testimonials';

// get the terms of taxonomy
$args = array(
	// 'numberposts'	=> 3,
	'posts_per_page'   => -1,
	'orderby'          => 'date',
	'order'            => 'ASC',
	'post_type'        => $post_type,
	'suppress_filters' => false
);

$tests = get_posts( $args );
?>

<section class="block-testimonials">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="slider-con">
					<div class="row">
						<div class="header-con">
							<h1><?php _e('Testimonials'); ?></h1>
							<span class="decor"></span>
						</div>

						<ul class="testimonials clear">
							<?php foreach( $tests as $test ) : ?>
								<li>
								  	<?php echo $test->post_content ?>
									<span class="name"><?php echo $test->post_title ?></span>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>