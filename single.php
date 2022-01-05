<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GZhDL
 */

get_header();
?>


<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>

<?php while ( have_posts() ) {
	the_post(); ?>

    <section class="article-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title"><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <article class="article-item">
                        <div class="article__img"><?php the_post_thumbnail(); ?></div>
                        <div class="article__text"><?php the_content(); ?></div>
                    </article>
                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2">
	                <?php echo do_shortcode('[lwptoc]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php } ?>

<?php
get_footer();
