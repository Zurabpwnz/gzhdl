<?php
/**
 * The template for displaying all pages
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

    <section class="banner hero-banner " id="hero-banner"
             style="background-image: url('<?php the_field( 'glavnaya_-_pervaya_sekcziya_banner' ); ?>')">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide d-flex justify-content-center align-items-center flex-column">

                        <div class="banner-slide__form">
							<?php echo do_shortcode( '[contact-form-7 id="706" title="Форма на баннере"]' ); ?>
                        </div>

                        <a href="#index-banner" class="btn banner__link">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bar.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner" id="index-banner" style="background-image: url('<?php the_field( 'banner_2' ); ?>')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide">
                        <h1 class="banner-slide__title"><?php the_field( 'glavnaya_-_banner_-_zagolovok' ); ?></h1>
                        <div class="banner-slide__text"><?php the_field( 'glavnaya_-_banner_-_opisanie' ); ?></div>

                        <a href="<?php the_field( 'glavnaya_-_banner_-_ssylka' ); ?>"
                           class="btn btn-transparent-border banner-slide__btn">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $glavanaya_nashi_uslugi = get_field( 'glavanaya_-_nashi_uslugi' ); ?>
<?php if ( $glavanaya_nashi_uslugi ) : ?>
    <section class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Наши услуги</h2>
                </div>
				<?php foreach ( $glavanaya_nashi_uslugi as $post ) : ?>
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


    <section class="tariffs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Тарифы транспортной компании</h2>

					<?php get_field( 'glavnaya_-_tip_perevozki' ) ?>


					<?php if ( have_rows( 'glavnaya_-_tip_perevozki' ) ) : ?>

                        <nav class="tariffs-nav">
                            <p>Тип перевозки:</p>

							<?php while ( have_rows( 'glavnaya_-_tip_perevozki' ) ) : the_row(); ?>

                                <a href="#" class="js-tariffs-link"><?php the_sub_field( 'tip_perevozki' ); ?></a>

							<?php endwhile; ?>

                        </nav>

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

                </div>


				<?php if ( have_rows( 'glavnaya_-_tip_perevozki' ) ) : ?>

					<?php while ( have_rows( 'glavnaya_-_tip_perevozki' ) ) : the_row(); ?>

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
                <div class="tariffs-btn"><a href="#"
                                            class="btn btn-transparent-border btn-transparent-border-black js-calc tariffs__btn">КАЛЬКУЛЯТОР</a>
                    <a class="btn btn-white js-tariffs-more tariffs__btn">Показать ещё</a></div>
            </div>
        </div>
    </section>


<?php get_template_part( 'template-parts/sections/how' ); ?>


<?php get_template_part( 'template-parts/sections/why' ); ?>


<?php get_template_part( 'template-parts/sections/form-question' ); ?>


<?php $glavnaya_blagodarstvennye_pisma = get_field( 'glavnaya_-_blagodarstvennye_pisma' ); ?>
<?php if ( $glavnaya_blagodarstvennye_pisma ) : ?>

    <section class="letter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="letter-header">
                        <h2 class="title letter__title">Благодарственные письма</h2>
                        <nav class="letter-nav">
                            <a href="#" class="slider__btn letter__prev">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                          fill="#ADB5BD"/>
                                </svg>
                            </a>

                            <a href="#" class="slider__btn slider__btn-next letter__next">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                          fill="#ADB5BD"/>
                                </svg>

                            </a>
                        </nav>
                    </header>
                </div>


                <div class="col-12">
                    <div class="letter-slider">
                        <div class="swiper-letter">
                            <div class="swiper-wrapper">

								<?php foreach ( $glavnaya_blagodarstvennye_pisma as $post ) : ?>
									<?php setup_postdata( $post ); ?>

                                    <div class="swiper-slide">
                                        <div class="letter-slide">
                                            <a href="<?php the_post_thumbnail_url(); ?>"
                                               class="glightbox letter-slide__img"
                                               data-gallery="letter">
												<?php the_post_thumbnail( 'certificates-thumb' ); ?>
                                            </a>
                                        </div>
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


<?php $glavnaya_chasto_zadavaemye_voprosy = get_field( 'glavnaya_-_chasto_zadavaemye_voprosy' ); ?>
<?php if ( $glavnaya_chasto_zadavaemye_voprosy ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

				<?php foreach ( $glavnaya_chasto_zadavaemye_voprosy as $post ) : ?>
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


<?php if ( have_rows( 'stati_i_novosti' ) ) : ?>

    <section class="article-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">
                        Статьи и новости
                    </h2>

                    <nav class="tab-nav article-nav">

						<?php while ( have_rows( 'stati_i_novosti' ) ) : the_row(); ?>

                            <a href="#"
                               class="tab-nav__link js-article-link"><?php the_sub_field( 'nazvanie_taba' ); ?></a>

						<?php endwhile; ?>

                    </nav>
                </div>


                <div class="col-12">

					<?php while ( have_rows( 'stati_i_novosti' ) ) : the_row(); ?>

                        <div class="tab js-article-tab" id="<?php the_sub_field( 'nazvanie_taba' ); ?>">
                            <div class="article-slider">
                                <div class="swiper-article">
                                    <div class="swiper-wrapper">

										<?php $soderzhimoe_taba = get_sub_field( 'soderzhimoe_taba' ); ?>
										<?php if ( $soderzhimoe_taba ) : ?>
											<?php foreach ( $soderzhimoe_taba as $post ) : ?>
												<?php setup_postdata( $post ); ?>

                                                <div class="swiper-slide">
                                                    <a href="<?php the_permalink(); ?>" class="article-item blog-item">
                                                        <h3 class="article__title"><?php the_title(); ?></h3>

                                                        <div class="article__img">
															<?php the_post_thumbnail(); ?>
                                                        </div>

                                                        <div class="article__pre">
															<?php the_excerpt(); ?>
                                                        </div>

                                                        <p class="btn btn-white article__btn">Читать</p>
                                                    </a>
                                                </div>

											<?php endforeach; ?>
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>

                                    </div>
                                </div>
                                <nav class="article-nav">
                                    <a href="#" class="slider__btn article__prev article__prev-1">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                                  fill="#ADB5BD"/>
                                        </svg>

                                    </a>

                                    <a href="#" class="slider__btn slider__btn-next article__next article__next-1">
                                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.40388 9.00856L18.9998 9.00856C19.552 9.00856 20 8.55707 20 7.99973C20 7.44239 19.5519 6.9909 18.9998 6.9909L3.40388 6.9909L8.60489 1.72218C8.99597 1.32764 8.99597 0.689435 8.60489 0.295899C8.2138 -0.0986324 7.5807 -0.0986324 7.19061 0.295899L0.290323 7.28655C-0.0947769 7.67511 -0.0987676 8.32535 0.290323 8.71382L7.19161 15.7045C7.58269 16.099 8.2158 16.098 8.60588 15.7045C8.99697 15.3109 8.99697 14.6717 8.60588 14.2782L3.40388 9.00856Z"
                                                  fill="#ADB5BD"/>
                                        </svg>

                                    </a>
                                </nav>
                            </div>
                        </div>

					<?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>


<?php

get_footer();
