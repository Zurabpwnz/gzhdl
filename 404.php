<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GZhDL
 */

get_header();
?>

<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>

    <section class="page404">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page404__wrapper">
                        <div class="page404__text">
                            <h1 class="page404__title">#404</h1>
                            <h2 class="page404__subtitle"><?php the_field( 'error-desc', 'option' ); ?></h2>
                        </div>

						<?php if ( get_field( 'img-404', 'option' ) ) : ?>

                            <div class="page404__img">
                                <img src="<?php the_field( 'img-404', 'option' ); ?>"/>
                            </div>

						<?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $nashi_uslugi_404 = get_field( 'nashi_uslugi_404', 'option' ); ?>
<?php if ( $nashi_uslugi_404 ) : ?>
    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Наши услуги</h2>
                </div>
				<?php foreach ( $nashi_uslugi_404 as $post ) : ?>
					<?php setup_postdata( $post ); ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <a href="<?php the_permalink(); ?>" class="catalog-item">
                            <div class="catalog-item__img"
                                 style="background-image: url('<?php the_field( 'izobrazhenie_zadnij_fon' ); ?>')">
								<?php if ( have_rows( 'izobrazheniya_bloka' ) ) : ?>
									<?php while ( have_rows( 'izobrazheniya_bloka' ) ) : the_row(); ?>
										<?php $izobrazhenie = get_sub_field( 'izobrazhenie' ); ?>
										<?php if ( $izobrazhenie ) : ?>
                                            <img src="<?php echo esc_url( $izobrazhenie['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $izobrazhenie['alt'] ); ?>"/>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
                            </div>
                            <h3 class="catalog-item__name"><?php the_title(); ?></h3>
                        </a>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php
get_footer();
