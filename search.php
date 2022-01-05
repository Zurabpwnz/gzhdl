<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package GZhDL
 */

get_header();
?>


<?php if ( function_exists( 'kama_breadcrumbs' ) ) {
	kama_breadcrumbs( '' );
} ?>

    <section class="search">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="title title-big"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Результат поиска: %s', 'bmw' ), '<span>' . get_search_query() . '</span>' );
						?></h1>


					<?php if ( have_posts() ) : ?>

						<nav class="search-list">

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile; ?>

						</nav>

						<?php

						the_posts_pagination( array(
							'end_size'  => 2,
							'prev_text' => __( '' ),
							'next_text' => __( '' ),
						) );

					else :

                        echo 'По Вашему запросу ничего не найдено. Перейдите на <a href="/">главную страницу</a> и попробуйте снова.';

					endif;
					?>

				</div>
			</div>
		</div>
	</section>

<?php
get_footer();