<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GZhDL
 */

get_header();
global $post;

?>


<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>

    <section class="banner" style="background-image: url('<?php the_field( 'usluga_-_banner' ); ?>')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide">
                        <h1 class="banner-slide__title banner-slide__title-black"><?php the_field( 'usluga_-_zagolovok_h1' ); ?></h1>

                        <div class="banner-slide__form">
							<?php echo do_shortcode( '[contact-form-7 id="706" title="Форма на баннере"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container">
            <div class="row">

				<?php if ( get_field( 'usluga_-_zagolovok_h2' ) ) { ?>
                    <div class="col-12">
                        <h2 class="content__title"><?php the_field( 'usluga_-_zagolovok_h2' ); ?></h2>
                    </div>
				<?php } ?>


                <div class="col-12">
                    <div class="content__text">
						<?php the_content(); ?>
                    </div>
                </div>


                <!--                <div class="col-12 col-lg-6">-->
                <!--                    <div class="content__text">--><?php //the_content(); ?><!--</div>-->
                <!--                </div>-->
                <!--                <div class="col-12 col-lg-6">-->
                <!--                    <div class="content__img">--><?php //the_post_thumbnail(); ?><!--</div>-->
                <!--                </div>-->
            </div>
        </div>
    </section>


<?php if ( get_the_ID() !== 607 && get_the_ID() !== 611 && get_the_ID() !== 612 && get_the_ID() !== 624 && get_the_ID() !== 625 ) { ?>
    <noindex>
        <section class="tariffs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">Тарифы транспортной компании</h2>

						<?php get_field( 'usluga_-_tip_perevozki' ) ?>


						<?php if ( have_rows( 'usluga_-_tip_perevozki' ) ) : ?>

                            <nav class="tariffs-nav">
                                <p>Тип перевозки:</p>

								<?php while ( have_rows( 'usluga_-_tip_perevozki' ) ) : the_row(); ?>

                                    <a href="#" class="js-tariffs-link"><?php the_sub_field( 'tip_perevozki' ); ?></a>

								<?php endwhile; ?>

                            </nav>

						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

                    </div>


					<?php if ( have_rows( 'usluga_-_tip_perevozki' ) ) : ?>

						<?php while ( have_rows( 'usluga_-_tip_perevozki' ) ) : the_row(); ?>

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
                        носят исключительно ознакомительный характер и не являются публичной офертой, определённой
                        пунктом 2
                        статьи 437 Гражданского кодекса Российской Федерации. Для получения подробной информации о
                        характеристиках услуг, их наличия и стоимости обращайтесь, пожалуйста, к специалистам нашей
                        компании.</p>
                    <div class="tariffs-btn"><a href="#"
                                                class="btn btn-transparent-border btn-transparent-border-black js-calc tariffs__btn">КАЛЬКУЛЯТОР</a>
                        <a href="#" class="btn btn-white js-tariffs-more tariffs__btn">Показать ещё</a></div>
                </div>
            </div>
        </section>
    </noindex>
<?php } else { ?>
    <section class="tariffs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Тарифы транспортной компании</h2>

					<?php get_field( 'usluga_-_tip_perevozki' ) ?>


					<?php if ( have_rows( 'usluga_-_tip_perevozki' ) ) : ?>

                        <nav class="tariffs-nav">
                            <p>Тип перевозки:</p>

							<?php while ( have_rows( 'usluga_-_tip_perevozki' ) ) : the_row(); ?>

                                <a href="#" class="js-tariffs-link"><?php the_sub_field( 'tip_perevozki' ); ?></a>

							<?php endwhile; ?>

                        </nav>

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

                </div>


				<?php if ( have_rows( 'usluga_-_tip_perevozki' ) ) : ?>

					<?php while ( have_rows( 'usluga_-_tip_perevozki' ) ) : the_row(); ?>

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
                    носят исключительно ознакомительный характер и не являются публичной офертой, определённой
                    пунктом 2
                    статьи 437 Гражданского кодекса Российской Федерации. Для получения подробной информации о
                    характеристиках услуг, их наличия и стоимости обращайтесь, пожалуйста, к специалистам нашей
                    компании.</p>
                <div class="tariffs-btn"><a href="#"
                                            class="btn btn-transparent-border btn-transparent-border-black js-calc tariffs__btn">КАЛЬКУЛЯТОР</a>
                    <a href="#" class="btn btn-white js-tariffs-more tariffs__btn">Показать ещё</a></div>
            </div>
        </div>
    </section>
<?php } ?>


<?php if ( have_rows( 'usluga_-_drugie_uslugi' ) ) : ?>

    <section class="tags">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Другие услуги</h2>
                </div>

                <div class="tags-slider">
                    <div class="swiper-tags">
                        <div class="swiper-wrapper">

							<?php while ( have_rows( 'usluga_-_drugie_uslugi' ) ) : the_row(); ?>

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


<?php $usluga_chasto_zadavaemye_voprosy = get_field( 'usluga_-_chasto_zadavaemye_voprosy' ); ?>
<?php if ( $usluga_chasto_zadavaemye_voprosy ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

				<?php foreach ( $usluga_chasto_zadavaemye_voprosy as $post ) : ?>
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


<?php get_template_part( 'template-parts/sections/banner-form' ); ?>


<?php get_template_part( 'template-parts/sections/map-change' ); ?>


<?php
get_footer();
