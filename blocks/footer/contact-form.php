<?php
	$mail = get_field( 'email_info', 'options' );
	$tel = get_field( 'telephone_info', 'options' );
	$adr = get_field( 'adresa_info', 'options' );
	$radno_vreme = get_field( 'radno_vreme', 'options' );

?>

<section class="contact-form">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>

				<div class="col-md-6">
					<p class="mail-message"><?php _e('Contact us for more informations', 'Ftp')?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="contact">
						<a href="mailto:<?php echo $mail ?>" class="email_icon"><?php echo $mail ?></a>
						<p class="phone_icon"><?php echo $tel ?></p>
						<p class="address_icon"></p><?php echo $adr ?>
						<p class="working_time_icon"><?php echo $radno_vreme ?></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form">

                        <?php
                        if(ICL_LANGUAGE_CODE=='en'){
                          echo do_shortcode( '[contact-form-7 id="42" title="Contact Form English"]' );
                        }
                        if(ICL_LANGUAGE_CODE=='de'){
                          echo do_shortcode( '[contact-form-7 id="2167" title="Contact Form Germany"]' );
                        }
                        if(ICL_LANGUAGE_CODE=='sr'){
                          echo do_shortcode( '[contact-form-7 id="2168" title="Contact Form Serbian"]' );
                        }
						//echo do_shortcode( '[contact-form-7 id="2168" title="Contact Form Serbian"]' );
					   ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>