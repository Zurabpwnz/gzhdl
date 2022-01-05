<?php
/**
 * Template Name: Карта сайта
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


<?php if (function_exists('kama_breadcrumbs')) {
    kama_breadcrumbs('');
} ?>


    <section class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <?php the_content(); ?>

                </div>
            </div>
        </div>
    </section>


<?php if (have_rows('taby')) : ?>

    <section class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                    <nav class="tab-nav">

                        <?php while (have_rows('taby')) : the_row(); ?>

                            <a href="#" class="tab-nav__link js-sitemap-link">
                                <?php the_sub_field('nazvanie_taba'); ?></a>

                        <?php endwhile; ?>

                    </nav>
                </div>


                <div class="col-12">

                    <?php while (have_rows('taby')) : the_row(); ?>

                        <?php if (have_rows('soderzhimoe_taba')) : ?>

                            <div class="row tab js-sitemap-tab">
                                <div class="col-12">
                                    <nav class="sitemap__list">

                                        <?php while (have_rows('soderzhimoe_taba')) : the_row(); ?>
                                            <?php $ssylka_na_straniczu = get_sub_field('ssylka_na_straniczu'); ?>
                                            <?php if ($ssylka_na_straniczu) : ?>

                                                <a href="<?php echo esc_url($ssylka_na_straniczu['url']); ?>"
                                                   target="<?php echo esc_attr($ssylka_na_straniczu['target']); ?>"><?php echo esc_html($ssylka_na_straniczu['title']); ?></a>

                                            <?php endif; ?>
                                        <?php endwhile; ?>

                                    </nav>
                                </div>
                            </div>

                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>

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
