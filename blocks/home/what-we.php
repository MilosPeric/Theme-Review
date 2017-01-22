<?php 

$text = get_field( 'text' );

$repeater = get_field( 'repeater' );


?>
<section class="block-what-we">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-con">
					<span class="decor"></span>
						<p><?php echo $text ?></p>
				</div>
			</div>
		</div>

		<?php foreach( $repeater as $item ) : ?>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 item-con">
					<div class="row">
						<div class="col-xs-8 col-sm-8 col-md-8">
							<div class="height-mat left-con clear">
								<h5><?php echo $item['title_left'] ?></h5>
								<?php echo $item['content_left'] ?>
								<span><?php echo $item['cena_left'] ?></span>
							</div>
						</div>

						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="icon-con">
								<div class="icon"><img src="<?php echo $item['icon_left']['url'] ?>" /></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 item-con">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4">
							<div class="icon-con">
								<div class="icon"><img src="<?php echo $item['icon_right']['url'] ?>" /></div>
							</div>
						</div>

						<div class="col-xs-8 col-sm-8 col-md-8">
							<div class="height-mat right-con">
								<h5><?php echo $item['title_right'] ?></h5>
								<?php echo $item['content_right'] ?>
								<span><?php echo $item['cena_right'] ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>	
		<?php endforeach ?>

	</div>
</section>