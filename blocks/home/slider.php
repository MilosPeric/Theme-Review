<?php 
	$slides = get_field( 'slider' );
?>

<div class="home-slider">
	<?php get_template_part( 'blocks/img-header' ); ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php foreach( $slides as $slide ) : ?>
			    <div style="background-image:url('<?php echo $slide['img']['url'] ?>');" class="item"> 
			    </div>
			<?php endforeach ?>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>