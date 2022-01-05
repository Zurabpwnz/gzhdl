<?php
/**
 * Template Name: Документы
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

                <div class="col-12 col-lg-6">
                    <div class="content__text">

                        <?php the_field( 'dokumenty_-_kontent_-_levaya' ); ?>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="content__text">

                        <?php the_field( 'dokumenty_-_kontent_-_pravaya' ); ?>

                    </div>
                </div>


                <?php if ( have_rows( 'dokumenty_-_listing_dokumentov_-_levaya' ) ) : ?>
                <div class="col-12 col-lg-6">
                    <div class="content__text">
                        <ul class="content-list__documents">

								<?php while ( have_rows( 'dokumenty_-_listing_dokumentov_-_levaya' ) ) : the_row(); ?>

                                    <li>
                                        <a href="<?php the_sub_field( 'ssylka' ); ?>">
											<?php the_sub_field( 'nazvanie' ); ?>
                                        </a>
                                    </li>

								<?php endwhile; ?>

                        </ul>
                    </div>
                </div>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>


                <?php if ( have_rows( 'dokumenty_-_listing_dokumentov_-_pravaya' ) ) : ?>
                    <div class="col-12 col-lg-6">
                        <div class="content__text">
                            <ul class="content-list__documents">

                                <?php while ( have_rows( 'dokumenty_-_listing_dokumentov_-_pravaya' ) ) : the_row(); ?>

                                    <li>
                                        <a href="<?php the_sub_field( 'ssylka' ); ?>">
                                            <?php the_sub_field( 'nazvanie' ); ?>
                                        </a>
                                    </li>

                                <?php endwhile; ?>

                            </ul>
                        </div>
                    </div>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

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


    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">География перевозок</h2>
                </div>
                <div class="col-12">
                    <div class="map-modal">
                        <div class="map-modal__wrapper">
                            <h3 class="map-modal__title">из Москвы в :</h3><select name="select-city"
                                                                                   class="form-control form__input">
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                                <option value="Москва">Москва</option>
                            </select>
                            <ul class="map-list">
                                <li class="map-list__item"><a href="#" class="map-list__link">Магадан</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Абакан</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Архангельск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Барнаул</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Благовещенск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Владивосток</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Волгоград</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Архангельск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Барнаул</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Благовещенск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Владивосток</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Волгоград</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Тверь</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Магнитогорск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Иваново</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Брянск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Белгород</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Сургут</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Владимир</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Чита</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Нижний Тагил</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Архангельск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Симферополь</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Калуга</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Смоленск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Волжский</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Якутск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Саранск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Череповец</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Курган</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Вологда</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Орёл</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Подольск</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Грозный</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Владикавказ</a></li>
                                <li class="map-list__item"><a href="#" class="map-list__link">Тамбов</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <?php the_field( 'siteMap', 'option' ); ?>
    </section>


<?php
get_footer();
