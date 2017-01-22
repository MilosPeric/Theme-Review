<?php 
/* Template Name: O nama */
the_post(); 

wp_enqueue_style( 'local-light' );
wp_enqueue_script( 'local-light-js' );

$items = get_field( 'items' );

$title = get_field( 'title_brand' );
$content = get_field( 'content_brand' );
$brand_logos = get_field( 'brand_logos' );

$title_ser = get_field( 'title_sertificate' );

?>
<div class="subheader-con">
	<?php get_template_part( 'blocks/img-header' ); ?>
	<img src="<?php echo THEMEURL . 'images/slider/pozadina-boja.jpg' ?>">
</div>


<section id="block" class="block page-about">
	<div class="container-fluid">
		<div class="container">
			<div class="row about-wrap">
				<div class="col-md-12">
					<div class="header-con">
						<h1><?php the_title(); ?></h1>
						<span class="decor"></span>
					</div>
				</div>

				<div class="col-md-6">
					<?php foreach( $items as $item ) : ?>
						<div class="about-row-par">
							<div class="icon">
								<img src="<?php echo $item['img']['url'] ?>">
							</div>
							<?php echo $item['content'] ?></p>
						</div>
					<?php endforeach ?>
				</div>

				<div class="col-md-6">
					<div class="video-con">
		    			<div class="opacity-wraper">
		    				<a href="https://www.youtube.com/embed/-MmOwLxiUkk" class="video-box video-light">
			    				<img src="<?php echo THEMEURL . 'images/logo.png' ?>">
			    				<div class="opacity-content">
				    				<i class="fa fa-play-circle-o" aria-hidden="true"></i>
				    			</div>
		    				</a>
		    			</div>
					</div>
				</div>
			</div>	
		</div>

		<?php get_template_part( 'blocks/home/testimonials' ); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="list-brand-con">
						<div class="header-con">
							<h1><?php echo $title ?></h1>
							<span class="decor"></span>
						</div>

						<span><?php echo $content ?></span>

						<div class="brands-con">
							<ul>
							<?php foreach( $brand_logos as $logo ) : ?>
								<li class="col-md-2"><img src="<?php echo $logo['img_logos']['url'] ?>"></li>
							<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
				<div class="col-md-12">
					<div class="sertificates-con">
						<div class="header-con">
							<h1><?php echo $title_ser ?></h1>
							<span class="decor"></span>
						</div>

						<div>
							<?php echo do_shortcode( '[ess_grid alias="sertifikat"]' ); ?>
						</div>
					</div>
				</div>
		</div>		
	</div>
</section>