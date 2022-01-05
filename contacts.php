<?php
/**
 * Template Name: Контакты
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

    <section class="contacts" itemscope itemtype="http://schema.org/Organization">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-lg-6">

                    <p class="contacts__text contacts__text-bold contacts__text-bold-address">Адрес</p>
                    <p class="contacts__text"
                       itemprop="address"><?php the_field( 'adres_na_kontakty', 'option' ); ?></p>
                    <p class="contacts__text contacts__text-bold contacts__text-bold-time">Время работы</p>
                    <p class="contacts__text"><?php the_field( 'vremya_raboty', 'option' ); ?></p>
                    <p class="contacts__text contacts__text-bold contacts__text-bold-tel">Телефон</p>
                    <a href="tel:<?php the_field( 'kontakty_telefon_ssylka', 'option' ); ?>" class="contacts__text"
                       itemprop="telephone"><?php the_field( 'kontakty_telefon_tekst', 'option' ); ?></a>
                    <p class="contacts__text contacts__text-bold contacts__text-bold-email">Email</p>
                    <a href="mailto:<?php the_field( 'e-mail', 'option' ); ?>" class="contacts__text"
                       itemprop="email"><?php the_field( 'e-mail', 'option' ); ?></a>
                </div>

                
                <div class="col-12 col-lg-6">
                    <p class="contacts__text contacts__text-bold contacts__text-bold-bank">Банковские реквизиты</p>

					<?php if ( have_rows( 'rekvizity', 'option' ) ) : ?>

                        <p class="contacts__text">

							<?php while ( have_rows( 'rekvizity', 'option' ) ) : the_row(); ?>
								<?php the_sub_field( 'nazvanie_rekvizita' ); ?>
								<?php the_sub_field( 'znachenie_rekvizita' ); ?><br>
							<?php endwhile; ?>

                        </p>

					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

                </div>

            </div>
        </div>
    </section>

<?php get_template_part( 'template-parts/sections/map-nomb' ); ?>

<?php get_template_part( 'template-parts/sections/form-question' ); ?>

<?php
get_footer();
