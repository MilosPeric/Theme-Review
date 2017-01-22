<?php 
	$location = get_field('location', 'option' );
?>
<section class="google-map">
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
</section>			

