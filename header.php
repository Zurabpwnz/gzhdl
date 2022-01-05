<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GZhDL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" itemscope itemtype="http://schema.org/Organization">
    <div class="container">
        <div class="row align-items-center header__row">
            <div class="col-6 col-sm-4 col-md-3 col-xl-6">
                <div class="row align-items-center">
                    <div class="col">
						<?php the_custom_logo(); ?>
                    </div>
                    <div class="d-none d-xl-block col">
                        <a href="#"
                           class="header__city d-none d-lg-flex align-items-center justify-content-center js-region">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/map.svg"
                                 alt="map" class="js-region">
                            <p>Ваш город: <span
                                        class="js-region-city"><?php the_field( 'glavnyj_gorod', 'option' ); ?></span>
                            </p>
                        </a></div>
                </div>
            </div>
            <div class="col d-none d-md-flex justify-content-center">
                <button class="btn btn-white header__btn js-query">ОНЛАЙН - ЗАЯВКА</button>
            </div>
            <div class="col d-flex justify-content-end justify-content-sm-center">
                <button class="btn btn-white header__btn js-call">ЗАКАЗАТЬ ЗВОНОК</button>
                <div class="header__burger js-modal-header">
				<?php echo do_shortcode( '[rmp_menu id="1124"]' ); ?>
                    <!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bur.svg" alt=""
                         class="js-modal-header">--></div>
            </div>
            <div class="col d-none d-sm-flex justify-content-end">
                <nav class="header-social">
                    <a href="tel:<?php the_field( 'osnovnoj_telefon_ssylka', 'option' ); ?>"
                       class="header-social__tel" itemprop="telephone">
						<?php the_field( 'osnovnoj_telefon_tekst', 'option' ); ?>
                    </a>

					<?php if ( have_rows( 'socz_seti_header', 'option' ) ) : ?>

                        <nav class="header-social__links">

							<?php while ( have_rows( 'socz_seti_header', 'option' ) ) : the_row(); ?>
								<?php $ikonka = get_sub_field( 'ikonka' ); ?>

                                <a href="<?php the_sub_field( 'ssylka' ); ?>" target="_blank">
                                    <img src="<?php echo esc_url( $ikonka['url'] ); ?>" alt="Social icon">
                                </a>

							<?php endwhile; ?>

                        </nav>

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

                </nav>
            </div>
        </div>


		<?php if ( have_rows( 'roditel', 'option' ) ) : ?>

            <!-- mega menu -->
            <div class="row">
                <div class="d-none col-md-10 col-lg-8 col-xxl-6 d-md-flex align-items-center">
                    <ul data-da=".adaptive-menu,767,2" class="header-menu">

						<?php while ( have_rows( 'roditel', 'option' ) ) : the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field( 'roditel_ssylka' ); ?>">
                                    <?php the_sub_field( 'roditel_nazvanie' ); ?>
                                </a>

	                            <?php if ( have_rows( 'dochernie' ) ) : ?>

                                <ul>

	                                <?php while ( have_rows( 'dochernie' ) ) : the_row(); ?>

                                        <li>
                                            <a href="<?php the_sub_field( 'dochernij_ssylka' ); ?>">
	                                            <?php the_sub_field( 'dochernij_nazvanie' ); ?></a>

                                            <?php if ( have_rows( 'poddochernij' ) ) : ?>

                                            <ul>
	                                            <?php while ( have_rows( 'poddochernij' ) ) : the_row(); ?>

                                                <li>
                                                    <a href="<?php the_sub_field( 'poddochernij_ssylka' ); ?>">
                                                        <?php the_sub_field( 'poddochernij_nazvanie' ); ?>
                                                    </a>

	                                                <?php if ( have_rows( 'goroda' ) ) : ?>

                                                        <ol>
                                                            <li>
                                                                <input type="search" placeholder="Поиск"></li>

			                                                <?php while ( have_rows( 'goroda' ) ) : the_row(); ?>

                                                                <li><a href="<?php the_sub_field( 'gorod_ssylka' ); ?>">
						                                                <?php the_sub_field( 'gorod_nazvanie' ); ?></a>
                                                                </li>

			                                                <?php endwhile; ?>

                                                        </ol>

	                                                <?php else : ?>
		                                                <?php // no rows found ?>
	                                                <?php endif; ?>
                                                    
                                                </li>

	                                            <?php endwhile; ?>

                                            </ul>

                                            <?php else : ?>
	                                            <?php // no rows found ?>
                                            <?php endif; ?>

                                        </li>

	                                <?php endwhile; ?>

                                </ul>
                            </li>

							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
						<?php endwhile; ?>

                    </ul>
                </div>
                <div class="d-none col-2 col-lg-4 col-xxl-6 d-md-flex align-items-center">
                    <div class="header__search-img js-search">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/srch.svg"
                             class="js-search" alt="">
                    </div>

					<?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>

                </div>
            </div>

		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

    </div>
</header>

<main>