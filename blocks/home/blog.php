<?php 

$args = array(
	'posts_per_page'   => 3,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'ASC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => false 
);
$posts_array = get_posts( $args ); 

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

$title = get_field( 'title_blog' );
$btn = get_field( 'btn_blog' );

?>
<section class="block-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-con">
					<div class="header-con">
						<h1><?php echo $title ?></h1>
						<span class="decor"></span>
					</div>

					<div class="blog">
						<div class="row">
							<?php foreach( $posts_array as $post ) : ?>
								<div class="col-md-4">
									<div class="post-img">
										<?php the_post_thumbnail( 'blog-home' ); ?>
										<span><?php _e( 'View More' ); ?></span>
									</div>
									<div class="blog-home-con">
										<h3><?php the_title(); ?></h3>
										<p><?php echo excerpt(20); ?></p>
										
										<a href="<?php echo get_permalink(); ?>" class="ani-btn icon-plus">
											<span class="front"><?php _e( 'More' ); ?></span>
											<span class="bottom"><?php _e( 'More' ); ?></span>
										</a>
									</div>
								</div>	                  
							<?php endforeach ?>
						</div>
					</div>
					<div class="btn-con blog-con">
						<a href="<?php echo get_category_link(3); ?>" class="col-md-12 ani-btn">
							<span class="front"><?php echo $btn ?></span>
							<span class="bottom"><?php echo $btn ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>