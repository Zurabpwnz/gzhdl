<?php
/**
 * Template Name: Сроки Перевозок
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


    <section class="top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex align-items-center order-2 order-lg-1 justify-content-center justify-content-lg-start">
                    <h1 class="title title-big top__title"><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                    <div class="top__img"><?php the_post_thumbnail(); ?></div>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title"><?php the_field( 'dokumenty_-_podzagolovok' ); ?></h2>
                </div>
                <div class="col-12">

					<?php the_content(); ?>

                </div>
            </div>
        </div>
    </section>


<?php $dokumenty_faq = get_field( 'dokumenty_-_faq' ); ?>
<?php if ( $dokumenty_faq ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

				<?php foreach ( $dokumenty_faq as $post ) : ?>
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


<?php get_template_part( 'template-parts/sections/map' ); ?>


<?php
get_footer();
