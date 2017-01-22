<?php 
	$icons = get_field('social', 'options'); 
?>

<section class="social">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			    <div class="social-bar">
			    	<!-- <p>Follow us on social network:</p> -->	
			        <?php foreach( $icons as $icon ) : ?>
			             <a target="_blank" href="<?php echo $icon['url'] ?>" class="icon-con">
			                <i class="fa fa-<?php echo $icon['name'] ?>" ></i>

			                <i class="hidden-fa fa fa-<?php echo $icon['name'] ?>" ></i>
			            </a> 
			        <?php endforeach ?> 
			    </div>
			</div>
		</div>
	</div>
</section>