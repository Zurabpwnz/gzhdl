<?php
/**
 * Template Name: Стоимость перевозок
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

    <section class="banner" style="background-image: url('<?php the_field( 'stoimost_perevozok_-_banner' ); ?>')">
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


<?php $stoimost_perevozok_nashi_uslugi = get_field( 'stoimost_perevozok_-_nashi_uslugi' ); ?>
<?php if ( $stoimost_perevozok_nashi_uslugi ) : ?>
    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Наши услуги</h2>
                </div>
				<?php foreach ( $stoimost_perevozok_nashi_uslugi as $post ) : ?>
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


<?php get_template_part( 'template-parts/sections/form-question' ); ?>


<?php get_template_part( 'template-parts/sections/solutions' ); ?>


<?php $stoimost_perevozok_dopolnitelnye_uslugi = get_field( 'stoimost_perevozok_-_dopolnitelnye_uslugi' ); ?>
<?php if ( $stoimost_perevozok_dopolnitelnye_uslugi ) : ?>

    <section class="catalog more">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Тарифы и цены на дополнительные услуги</h2>
                </div>

				<?php foreach ( $stoimost_perevozok_dopolnitelnye_uslugi as $post ) : ?>

                    <div class="col-12 col-md-6 col-xl-4">
                        <a href="<?php the_permalink(); ?>" class="catalog-item">
                            <div class="catalog-item__img"
                                 style="background-image: url('<?php the_field( 'stoimost_perevozok_-_dochernyaya_-_izobrazhenie_zadnij_fon'); ?>')">

								<?php if ( have_rows( 'stoimost_perevozok_-_dochernyaya_-_izobrazheniya_bloka' ) ) : ?>
									<?php while ( have_rows( 'stoimost_perevozok_-_dochernyaya_-_izobrazheniya_bloka' ) ) : the_row(); ?>
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

				<?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>
<?php endif; ?>


    <section class="tariffs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Тарифы транспортной компании</h2>

					<?php get_field( 'stoimost_perevozok_-_tip_perevozki' ) ?>


					<?php if ( have_rows( 'stoimost_perevozok_-_tip_perevozki' ) ) : ?>

                        <nav class="tariffs-nav">
                            <p>Тип перевозки:</p>

							<?php while ( have_rows( 'stoimost_perevozok_-_tip_perevozki' ) ) : the_row(); ?>

                                <a href="#" class="js-tariffs-link"><?php the_sub_field( 'tip_perevozki' ); ?></a>

							<?php endwhile; ?>

                        </nav>

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

                </div>


				<?php if ( have_rows( 'stoimost_perevozok_-_tip_perevozki' ) ) : ?>

					<?php while ( have_rows( 'stoimost_perevozok_-_tip_perevozki' ) ) : the_row(); ?>

                        <div class="tab js-tariffs-tab">

							<?php if ( have_rows( 'usluga_-_tarify' ) ) : ?>

                                <div class="tariffs-city">
                                    <p>Тарифы из</p>
                                    <select class="select">
                                        <option disabled="disabled">Выбрать</option>

										<?php while ( have_rows( 'usluga_-_tarify' ) ) : the_row(); ?>

                                            <option value="<?php the_sub_field( 'nazvanie_vkladki' ); ?>">
												<?php the_sub_field( 'nazvanie_vkladki' ); ?>
                                            </option>

										<?php endwhile; ?>

                                    </select>
                                </div>


								<?php while ( have_rows( 'usluga_-_tarify' ) ) : the_row(); ?>

                                    <div class="tab js-tariffs-subtab">

										<?php the_sub_field( 'tablicza' ); ?>

                                    </div>

								<?php endwhile; ?>

							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

                        </div>

					<?php endwhile; ?>

				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>


                <p class="tariffs-capture">Обращаем Ваше внимание на то, что приведённые цены и характеристики услуг
                    носят исключительно ознакомительный характер и не являются публичной офертой, определённой пунктом 2
                    статьи 437 Гражданского кодекса Российской Федерации. Для получения подробной информации о
                    характеристиках услуг, их наличия и стоимости обращайтесь, пожалуйста, к специалистам нашей
                    компании.</p>

                <div class="tariffs-btn">
                    <a href="#" class="btn btn-transparent-border btn-transparent-border-black js-calc tariffs__btn">КАЛЬКУЛЯТОР</a>
                    <a href="#" class="btn btn-white js-tariffs-more tariffs__btn">Показать ещё</a></div>
            </div>
        </div>
    </section>


<?php if ( have_rows( 'stoimost_perevozok_-_drugie_uslugi' ) ) : ?>

    <section class="tags">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Другие услуги</h2>
                </div>

                <div class="tags-slider">
                    <div class="swiper-tags">
                        <div class="swiper-wrapper">

							<?php while ( have_rows( 'stoimost_perevozok_-_drugie_uslugi' ) ) : the_row(); ?>

                                <div class="swiper-slide tags-slide">
                                    <a href="<?php the_sub_field( 'ssylka' ); ?>"
                                       class="btn btn-white tags__btn"><?php the_sub_field( 'nazvanie' ); ?></a></div>

							<?php endwhile; ?>

                        </div>
                    </div>
                    <div class="slider__btn tags__next">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                  fill="#ADB5BD"/>
                        </svg>
                    </div>
                    <div class="slider__btn tags__prev">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                  fill="#ADB5BD"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>


<?php get_template_part( 'template-parts/sections/how' ); ?>


<?php get_template_part( 'template-parts/sections/banner-form' ); ?>


<?php $stoimost_perevozok_chasto_zadavaemye_voprosy = get_field( 'stoimost_perevozok_-_chasto_zadavaemye_voprosy' ); ?>
<?php if ( $stoimost_perevozok_chasto_zadavaemye_voprosy ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

				<?php foreach ( $stoimost_perevozok_chasto_zadavaemye_voprosy as $post ) : ?>
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
