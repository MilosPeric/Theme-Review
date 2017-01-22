<?php 
/* Template Name: Faq */
the_post(); 

$accordions = get_field( 'accordion' );

?>
<div class="subheader-con">
    <?php get_template_part( 'blocks/img-header' ); ?>
    <img src="<?php echo THEMEURL . 'images/slider/tattoo-gesture.jpg' ?>">
</div>

<section id="block" class="block page-faq clear">
	<div class="container">
        <div class="header-con">
            <h1><?php the_title(); ?></h1>
            <span class="decor"></span>
        </div>

		<div class="faq-con">
			
			<div class="accordion">
                <?php if( $accordions ) : ?>
                    <?php foreach( $accordions as $i => $accordion ) : ?>
                        <div class="accordion-section">
                            <a class="accordion-section-title" href="#accordion-<?php echo $i + 1 ?>"><?php echo $accordion['title']; ?></a>
                             
                            <div id="accordion-<?php echo $i + 1 ?>" class="accordion-section-content">
                                <p><?php echo $accordion['content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div><!--end .accordion-->

		</div>
	</div>
</section>