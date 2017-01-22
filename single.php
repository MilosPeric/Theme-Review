<?php 
the_post();


?>
<div class="block-blog-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="post-content">
					<div class="post_thumbnail">
						<?php the_post_thumbnail( 'blog-thumb' ); ?>
					</div>
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
				</div>

			</div>
		</div>
	</div>
</div>