<?php
/**
 * Template Name: Вакансии
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

    <section class="job faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big"><?php the_title(); ?></h1>
                </div>

				<?php

				// Сначала получаем термины кастомной таксономии:
				$terms = get_terms( [
					'taxonomy'   => 'otdel', // тут укажите правильное название вашей таксономии
					'hide_empty' => true,
				] );

				// Далее циклом выводим эти блоки:
				foreach ( $terms as $term ) : ?>

                    <div class="col-12 col-lg-6">
                        <h2 class="title title-mb"><?php echo $term->name; ?></h2>


						<?php // Получаем Х записей с конкретным термином, формируем параметры запроса:
						$args = [
							'post_type'      => 'vakansiya',
							// тут укажите правильное название вашего custom post type
							'posts_per_page' => 5,
							// количество записей
							'tax_query'      => [
								[
									'taxonomy'         => 'otdel',
									// тут укажите правильное название вашей таксономии
									'field'            => 'term_id',
									// term_id, slug или name - что удобнее
									'terms'            => $term->term_id,
									// ID текущего термина в цикле
									'include_children' => false,
								],
							],
						];

						// Получаем Х записей с конкретным термином:
						$posts_with_term = new WP_Query( $args );

						// Выводим записи циклом:
						while ( $posts_with_term->have_posts() ) : $posts_with_term->the_post(); ?>

                            <div class="faq-item">
                                <header class="faq-item__header job-item__header">
                                    <span><?php the_title(); ?></span><span><?php the_field( 'zarplata_vakansii' ); ?> ₽</span>
                                </header>
                                <div class="faq-item__text tab">
									<?php the_content(); ?>
                                    <a href="#"
                                       class="btn btn-transparent-border btn-transparent-border-black js-job job-item__btn">ОТПРАВИТЬ
                                        РЕЗЮМЕ</a>
                                </div>
                            </div>

						<?php endwhile;
						wp_reset_postdata(); ?>

                    </div>

				<?php endforeach;
				?>

            </div>
        </div>
    </section>

<?php
get_footer( 'vacancies' );
