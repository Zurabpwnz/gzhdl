<?php
/**
 * Template Name: Написать руководству
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


    <section class="mail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title title-big">Сообщить о проблеме</h1>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mail__content"><?php the_content(); ?></div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mail-link">
                        <a href="#" class="js-mail-link" style="display:none;"></a>
                        <a href="#" class="btn btn-white mail-link__btn js-mail-link">Сообщить о проблеме</a>
                        <a href="#" class="btn btn-white mail-link__btn js-mail-link">Оставить отзыв</a>
                        <a href="#" class="btn btn-white mail-link__btn js-mail-link">Отправить предложение</a>
                    </div>

                    <div class="mail-form">
                        <div class="tab mail-form__wrapper js-mail-tab">
                            <p class="mail-form__text">Для отправки сообщения выберите тему</p>
                        </div>

                        <div class="tab mail-form__wrapper js-mail-tab">

							<?php echo do_shortcode( '[contact-form-7 id="501" title="Сообщить о проблеме"]' ); ?>

                            <p class="mail-form__agreement">Нажимая на кнопку «Отправить» Вы даете согласие на обработку
                                своих персональных данных в соответствии со статьей 9 Федерального закона от 27 июля
                                2006 г. NО 152-ФЗ «О персональных данных»<br>* ОБЯЗАТЕЛЬНОЕ ПОЛЕ ДЛЯ ЗАПОЛНЕНИЯ</p>

                        </div>

                        <div class="tab mail-form__wrapper mail-form-reviews js-mail-tab">

                            <?php echo do_shortcode('[contact-form-7 id="597" title="Оставить отзыв"]'); ?>


                            <p class="mail-form__agreement">Нажимая на кнопку «Отправить» Вы даете согласие на обработку
                                своих персональных данных в соответствии со статьей 9 Федерального закона от 27 июля
                                2006 г. NО 152-ФЗ «О персональных данных»<br>* ОБЯЗАТЕЛЬНОЕ ПОЛЕ ДЛЯ ЗАПОЛНЕНИЯ</p>

                        </div>
                        <div class="tab mail-form__wrapper js-mail-tab">

							<?php echo do_shortcode( '[contact-form-7 id="503" title="Отправить предложение"]' ); ?>
                            
                            <p class="mail-form__agreement">Нажимая на кнопку «Отправить» Вы даете согласие на обработку
                                своих персональных данных в соответствии со статьей 9 Федерального закона от 27 июля
                                2006 г. NО 152-ФЗ «О персональных данных»<br>* ОБЯЗАТЕЛЬНОЕ ПОЛЕ ДЛЯ ЗАПОЛНЕНИЯ</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
