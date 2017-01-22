<?php 
/* Template Name: Kontakt */
the_post(); 
	
$mail = get_field( 'mail_page' );
$tel = get_field( 'tel_page' );
$adr = get_field( 'adresa_page' );
?>
<div class="subheader-con">
	<?php get_template_part( 'blocks/img-header' ); ?>
	<img src="<?php echo THEMEURL . 'images/slider-tattoo.jpg' ?>">
</div>

<section id="block" class="page-contact">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-m-12">
					<div class="contact-con">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-4">
								<i class="fa fa-mobile"></i>
								<p><?php echo $tel ?></p>
							</div>

							<div class="col-xs-12 col-sm-4 col-md-4">
								<i class="fa fa-map-marker"></i>
								<p><?php echo $adr ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>