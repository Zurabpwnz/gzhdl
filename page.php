<?php
/**
 * The template for displaying all pages
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
                    <div class="top__img"><img src="img/top1.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">

						<?php the_content(); ?>

                </div>

                <!--                <div class="col-12">-->
                <!--                    <h2 class="title">Eget lorem dolor sed viverra</h2>-->
                <!--                </div>-->
                <!--                <div class="col-12 col-lg-6">-->
                <!--                    <div class="content__text">-->
                <!--                        <p>Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Faucibus nisl tincidunt eget nullam non nisi est sit. Suspendisse in est ante in nibh mauris cursus mattis molestie. Et ultrices neque ornare aenean. Pellentesque nec nam aliquam sem et. At volutpat diam ut venenatis tellus in. Nibh ipsum consequat nisl vel. In aliquam sem fringilla ut morbi tincidunt. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Et tortor at risus viverra adipiscing at. Convallis convallis tellus id interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida. Vulputate sapien nec sagittis aliquam malesuada. Mauris augue neque gravida in fermentum et. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Eget velit aliquet sagittis id. Nunc sed augue lacus viverra vitae congue eu consequat. Egestas integer eget aliquet nibh praesent tristique magna sit.</p>-->
                <!--                        <ul>-->
                <!--                            <li>Blandit volutpat maecenas volutpat blandit.</li>-->
                <!--                            <li>Dui ut ornare lectus sit amet est placerat.</li>-->
                <!--                            <li>Nibh praesent tristique magna sit amet purus gravida.</li>-->
                <!--                            <li>Vel orci porta non pulvinar neque laoreet suspendisse interdum.</li>-->
                <!--                            <li>Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat.</li>-->
                <!--                            <li>Placerat vestibulum lectus mauris ultrices eros.</li>-->
                <!--                            <li>Turpis tincidunt id aliquet risus feugiat.</li>-->
                <!--                            <li>Eget lorem dolor sed viverra.</li>-->
                <!--                            <li>Nunc faucibus a pellentesque sit amet porttitor eget dolor.</li>-->
                <!--                        </ul>-->
                <!--                        <p>Pellentesque nec nam aliquam sem et. At volutpat diam ut venenatis tellus in. Nibh ipsum consequat nisl vel. In aliquam sem fringilla ut morbi tincidunt. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Et tortor at risus viverra adipiscing at. Convallis convallis tellus id interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida. Vulputate sapien nec sagittis aliquam malesuada. Mauris augue neque gravida in fermentum et. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id.</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-12 col-lg-6">-->
                <!--                    <div class="content__text">-->
                <!--                        <p>Vitae sapien pellentesque habitant morbi tristique senectus et netus et. Faucibus nisl tincidunt eget nullam non nisi est sit. Suspendisse in est ante in nibh mauris cursus mattis molestie. Et ultrices neque ornare aenean. Pellentesque nec nam aliquam sem et. At volutpat diam ut venenatis tellus in. Nibh ipsum consequat nisl vel. In aliquam sem fringilla ut morbi tincidunt. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Et tortor at risus viverra adipiscing at. Convallis convallis tellus id interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida. Vulputate sapien nec sagittis aliquam malesuada. Mauris augue neque gravida in fermentum et. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Eget velit aliquet sagittis id. Nunc sed augue lacus viverra vitae congue eu consequat. Egestas integer eget aliquet nibh praesent tristique magna sit.</p>-->
                <!--                        <ul>-->
                <!--                            <li>Blandit volutpat maecenas volutpat blandit.</li>-->
                <!--                            <li>Dui ut ornare lectus sit amet est placerat.</li>-->
                <!--                            <li>Nibh praesent tristique magna sit amet purus gravida.</li>-->
                <!--                            <li>Vel orci porta non pulvinar neque laoreet suspendisse interdum.</li>-->
                <!--                            <li>Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat.</li>-->
                <!--                            <li>Placerat vestibulum lectus mauris ultrices eros.</li>-->
                <!--                            <li>Turpis tincidunt id aliquet risus feugiat.</li>-->
                <!--                            <li>Eget lorem dolor sed viverra.</li>-->
                <!--                            <li>Nunc faucibus a pellentesque sit amet porttitor eget dolor.</li>-->
                <!--                        </ul>-->
                <!--                        <p>Pellentesque nec nam aliquam sem et. At volutpat diam ut venenatis tellus in. Nibh ipsum consequat nisl vel. In aliquam sem fringilla ut morbi tincidunt. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. Et tortor at risus viverra adipiscing at. Convallis convallis tellus id interdum. Tristique et egestas quis ipsum suspendisse ultrices gravida. Vulputate sapien nec sagittis aliquam malesuada. Mauris augue neque gravida in fermentum et. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id.</p>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
    </section>


<?php $stranicza_faq = get_field( 'stranicza_faq' ); ?>
<?php if ( $stranicza_faq ) : ?>

    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Часто задаваемые вопросы</h2>
                </div>

                <?php foreach ( $stranicza_faq as $post ) : ?>
                    <?php setup_postdata ( $post ); ?>

                    <div class="col-12 col-lg-6">
                        <div class="faq-item">
                            <header class="faq-item__header"><?php the_title(); ?></header>
                            <div class="faq-item__text tab">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

<?php endif; ?>

    <section class="banner-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-7">
                    <h2 class="banner-form__title">Нужна консультация? Оставлись вопросы? Мы всегда на связи</h2>
                    <div class="banner-form-btn"><a href="#"
                                                    class="btn btn-transparent-border btn-transparent-border-black banner-form-btn__item js-query">оставить
                            заявку</a> <a href="#"
                                          class="btn btn-transparent-border btn-transparent-border-black banner-form-btn__item js-call">обратный
                            звонок</a> <a href="#"
                                          class="btn btn-transparent-border btn-transparent-border-black banner-form-btn__item">начать
                            чат</a></div>
                </div>
            </div>
        </div>
    </section>

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
