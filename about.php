<?php
/**
 * Template Name: О компании
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


    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                    <h2 class="content__title"><?php the_field( 'o_nas_-_podzagolovok' ); ?></h2>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="content__text">
						<?php the_content(); ?>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="content__img"><?php the_post_thumbnail(); ?></div>
                </div>
            </div>
        </div>

		<?php $o_kompanii_izobrazhenie = get_field( 'o_kompanii_-_izobrazhenie' ); ?>
		<?php if ( $o_kompanii_izobrazhenie ) : ?>

            <div class="content__img">
                <img src="<?php echo esc_url( $o_kompanii_izobrazhenie['url'] ); ?>"
                     alt="<?php echo esc_attr( $o_kompanii_izobrazhenie['alt'] ); ?>"/>
            </div>

		<?php endif; ?>


        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content__text">

						<?php the_field( 'o_kompanii_-_levaya_chast_kontenta' ); ?>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="content__text">

						<?php the_field( 'o_kompanii_-_pravaya_chast_kontenta' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $o_nas_partnery = get_field( 'o_nas_-_partnery' ); ?>
<?php if ( $o_nas_partnery ) : ?>
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-slider">
                        <div class="swiper-partners">
                            <div class="swiper-wrapper">
								<?php foreach ( $o_nas_partnery as $post ) : ?>
									<?php setup_postdata( $post ); ?>

                                    <div class="swiper-slide">
                                        <span class="partners__item"><?php the_post_thumbnail(); ?></span>
                                    </div>

								<?php endforeach; ?>
                            </div>
                        </div>
                        <a href="#" class="slider__btn partners__prev">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                      fill="#ADB5BD"/>
                            </svg>
                        </a><a href="#" class="slider__btn slider__btn-next partners__next">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                      fill="#ADB5BD"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php get_template_part( 'template-parts/sections/why' ); ?>


<?php $o_nas_blagodarstvennye_pisma = get_field( 'o_nas_-_blagodarstvennye_pisma' ); ?>
<?php if ( $o_nas_blagodarstvennye_pisma ) : ?>
    <section class="letter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="letter-header">
                        <h2 class="title letter__title">Благодарственные письма</h2>
                        <nav class="letter-nav"><a href="#" class="slider__btn letter__prev">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                          fill="#ADB5BD"/>
                                </svg>
                            </a><a href="#" class="slider__btn slider__btn-next letter__next">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                          fill="#ADB5BD"/>
                                </svg>
                            </a></nav>
                    </header>
                </div>
                <div class="col-12">
                    <div class="letter-slider">
                        <div class="swiper-letter">
                            <div class="swiper-wrapper">

								<?php foreach ( $o_nas_blagodarstvennye_pisma as $post ) : ?>
									<?php setup_postdata( $post ); ?>

                                    <div class="swiper-slide">
                                        <div class="letter-slide">
                                            <a href="<?php the_post_thumbnail_url(); ?>"
                                               class="glightbox letter-slide__img"
                                               data-gallery="letter"><?php the_post_thumbnail(); ?></a></div>
                                    </div>

								<?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php wp_reset_postdata(); ?>
<?php endif; ?>


<?php
get_footer();
