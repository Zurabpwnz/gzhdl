<?php
/**
 * Template Name: Акции
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GZhDL
 */

get_header();
?>

<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>

    <section class="stocks">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                </div>
                <div class="col-12">

					<?php
					$q = new WP_Query( array(
						'post_type' => 'aktsii',
						'orderby'   => 'ID',
						'order'     => 'ASC',
					) );
					?>
					<?php if ( $q->have_posts() ) : ?>
						<?php while ( $q->have_posts() ) : $q->the_post(); ?>

                            <div class="stocks-item">
                                <div class="stocks-item__img"><?php the_post_thumbnail('stock-thumb');?></div>
                                <div class="stocks-item__content">
                                    <h2 class="stocks-item__title"><?php the_title(); ?></h2>
                                    <div class="stocks-item__text"><?php the_content(); ?></div>
                                    <a href="#" class="btn btn-white stocks-item__btn js-stocks-more">Развернуть</a>
                                </div>
                            </div>

						<?php endwhile;
						wp_reset_postdata();
						?>
					<?php endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
