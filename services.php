<?php
/**
 * Template Name: Услуги
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


    <section class="banner" style="background-image: url('<?php the_field( 'uslugi_-_banner' ); ?>');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide">
                        <h1 class="banner-slide__title banner-slide__title-black"><?php the_title(); ?></h1>
                        <div class="banner-slide__form">
	                        <?php echo do_shortcode( '[contact-form-7 id="706" title="Форма на баннере"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $uslugi_nashi_uslugi = get_field( 'uslugi_-_nashi_uslugi' ); ?>
<?php if ( $uslugi_nashi_uslugi ) : ?>
    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Наши услуги</h2>
                </div>
				<?php foreach ( $uslugi_nashi_uslugi as $post ) : ?>
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


<?php get_template_part( 'template-parts/sections/solutions' ); ?>


<?php get_template_part( 'template-parts/sections/how' ); ?>


<?php $uslugi_faq = get_field( 'uslugi_-_faq' ); ?>
<?php if ( $uslugi_faq ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

				<?php foreach ( $uslugi_faq as $post ) : ?>
					<?php setup_postdata( $post ); ?>

                    <div class="col-12 col-lg-6">
                        <div class="faq-item">
                            <header class="faq-item__header"><?php the_title(); ?></header>
                            <div class="faq-item__text tab"><?php the_content(); ?></div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </section>

	<?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php get_template_part( 'template-parts/sections/map-change' ); ?>


<?php
get_footer();
