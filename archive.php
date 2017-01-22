<?php
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
    } else {
    $content = implode(" ",$content);
    } 
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

?>
<div class="container">
	<div class="row">
		<div class="post-container">
            <ul>
                <?php while( have_posts() ) : ?> <?php the_post() ?>

                    <li class="archive-post row">
	                    <div class="col-xs-12 col-sm-6 col-md-6">
	                        <h2><?php the_title() ?></h2>
	                        <p><?php echo excerpt(40); ?></p>
	                        <a href="<?php the_permalink() ?>" class="ani-btn">
                                <span class="front"><?php _e( 'Read More' ); ?></span>
                                <span class="bottom"><?php _e( 'Read More' ); ?></span>
                            </a>
	                    </div>

	                    <div class="col-xs-12 col-sm-6 col-md-6">
	                    	<a href="<?php the_permalink() ?>">
	                        	<div class="project-image post-img">
                                    <?php the_post_thumbnail( 'destination-gallery' ); ?>
                                    <span><?php _e( 'Read More' ) ?></span>      
                                </div>	
	                    	</a>
	                    </div>
                    </li>

               	<?php endwhile ?>
            </ul>

            <?php
                $prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
                $next_link = get_next_posts_link(__('Newer Entries &raquo;'));
            ?>

            <?php if( $prev_link || $next_link ) : ?>
                <div class="pagination-holder">
                    PAGE: <?php do_action( 'local_pagination' ) ?>
                </div>
            <?php endif ?>
	        
		</div>
	</div>
</div>
