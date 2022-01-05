<?php
/**
 * Template Name: Рекомендации
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

    <section class="banner banner-gradient" style="background-image: url('img/ban6.jpg')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide banner-slide-black">
                        <h1 class="banner-slide__title"><?php the_title(); ?></h1>
                        <h2 class="banner-slide__subtitle"><?php the_field( 'rekomendaczii_-_podzagolovok' ); ?></h2>
                        <div class="banner-slide__text"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
$q = new WP_Query( array(
	'post_type' => 'rekomendatsii',
	'orderby'   => 'ID',
	'order'     => 'ASC',
) );
?>
<?php if ( $q->have_posts() ) : ?>

    <section class="partners rec">
        <div class="container">
            <div class="row">

				<?php while ( $q->have_posts() ) : $q->the_post(); ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="rec-item">
                            <a href="<?php the_post_thumbnail_url(); ?>" class="glightbox letter-slide__img"
                               data-gallery="letter"><?php the_post_thumbnail(); ?></a></div>
                    </div>

				<?php endwhile;
				wp_reset_postdata();
				?>

            </div>
        </div>
    </section>

<?php endif; ?>


<?php
get_footer();
