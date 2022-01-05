<?php
/**
 * Template Name: Условия перевозок
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


    <section class="banner banner-gradient banner-center"
             style="background-image: url('<?php the_field( 'usloviya_perevozok_-_banner' ); ?>')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-slide banner-slide-black banner-slide-center">
                        <h1 class="banner-slide__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content__text">

                        <h2><?php the_field( 'usloviya_perevozok_-_podzagolovok' ); ?></h2>

						<?php the_content(); ?>
                    </div>
                </div>


				<?php if ( have_rows( 'usloviya_perevozok_-_usloviya' ) ) : ?>

                    <div class="col-12 col-lg-6">
                        <div class="row">

							<?php while ( have_rows( 'usloviya_perevozok_-_usloviya' ) ) : the_row(); ?>

                                <div class="col-6">
                                    <a href="<?php the_sub_field( 'ssylka' ); ?>" class="content-link">

	                                    <?php $ikonka = get_sub_field( 'ikonka' ); ?>
										<?php if ( $ikonka ) : ?>
                                            <img src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
										<?php endif; ?>

                                        <span><?php the_sub_field( 'nazvanie' ); ?></span>
                                    </a>
                                </div>
							<?php endwhile; ?>

                        </div>
                    </div>

				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>

            </div>
        </div>
    </section>




<?php $usloviya_perevozok_faq = get_field( 'usloviya_perevozok_-_faq' ); ?>
<?php if ( $usloviya_perevozok_faq ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

	            <?php foreach ( $usloviya_perevozok_faq as $post ) : ?>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2079.578715092356!2d49.622503416284545!3d58.58578328140493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43fcf66286f54127%3A0x3e3f4174f6bcd2b1!2z0J_Rg9Cz0LDRh9GR0LLQsCwgMdCw!5e0!3m2!1sru!2sru!4v1616491920715!5m2!1sru!2sru"
                allowfullscreen="" loading="lazy"></iframe>
    </section>


<?php
get_footer();
