<?php
/**
 * Template Name: FAQ
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

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-lg-6">

					<?php
					$q = new WP_Query( array(
						'post_type' => 'faq',
						'orderby'   => 'ID',
						'order'     => 'ASC',
					) );
					?>
					<?php if ( $q->have_posts() ) : ?>
						<?php while ( $q->have_posts() ) : $q->the_post(); ?>

                            <div class="faq-item">
                                <header class="faq-item__header"><?php the_title(); ?></header>
                                <div class="faq-item__text tab"><?php the_content(); ?></div>
                            </div>

						<?php endwhile;
						wp_reset_postdata();
						?>
					<?php endif; ?>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="form faq-form">
                        <div class="form__wrapper faq-form__wrapper">
                            <h3 class="faq-form__title">Уважаемый посетитель!</h3>
                            <h4 class="faq-form__subtitle">Если у Вас еще остались вопросы, можете задать их через форму
                                обратной связи. Мы ответим на указанный e-mail.</h4>

                            <?php echo do_shortcode('[contact-form-7 id="874" title="Часто задаваемые вопросы"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
