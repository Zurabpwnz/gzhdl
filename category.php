<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package isupb
 */

get_header();

$page_id = get_queried_object()->ID;
$cat_slug = get_queried_object()->slug;
?>

<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>


<?php
$categories = get_categories( [
	'taxonomy'     => 'category',
	'type'         => 'post',
	'child_of'     => 0,
	'parent'       => '',
	'orderby'      => 'ID',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'pad_counts'   => false,
	// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
] ); ?>

    <section class="article-block blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php single_cat_title(); ?></h1>

                    <nav class="tab-nav article-nav">

                        <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="tab-nav__link">Все
                            публикации</a>

						<?php if ( $categories ) { ?>

							<?php foreach ( $categories as $cat ) { ?>

                                <a href="/<?php echo $cat->slug; ?>/"
                                   class="tab-nav__link <?php if($cat->slug == $cat_slug) { echo 'active'; } ?> "><?php echo $cat->name; ?></a>

							<?php } ?>

						<?php } ?>

                    </nav>
                </div>

                <div class="col-12">

                    <div class="row">

						<?php if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile; ?>

						<?php endif; ?>

                    </div>
                </div>

                <div class="col-12">

					<?php

					the_posts_pagination( array(
						'end_size'  => 2,
						'prev_text' => __( '' ),
						'next_text' => __( '' ),
					) );

					?>

                </div>

            </div>
        </div>
    </section>


<?php
get_footer();
