<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GZhDL
 */

?>

</main>

<footer class="footer" itemscope itemtype="http://schema.org/Organization">
    <div class="container">
        <div class="row footer__row align-items-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <?php the_custom_logo(); ?>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <a href="tel:<?php the_field('osnovnoj_telefon_ssylka', 'option'); ?>" class="footer__tel"
                   itemprop="telephone"><?php the_field('osnovnoj_telefon_tekst', 'option'); ?></a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">
                <a href="mailto:<?php the_field('e-mail', 'option'); ?>" class="footer__mail"
                   itemprop="email"><?php the_field('e-mail', 'option'); ?></a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">

                <?php if (have_rows('socz_seti_footer', 'option')) : ?>

                    <nav class="header-social__links footer-social">

                        <?php while (have_rows('socz_seti_footer', 'option')) : the_row(); ?>

                            <a href="<?php the_sub_field('ssylka'); ?>" target="_blank">
                                <?php $ikonka = get_sub_field('ikonka'); ?>
                                <?php if ($ikonka) : ?>
                                    <img src="<?php echo esc_url($ikonka['url']); ?>"
                                         alt="<?php echo esc_attr($ikonka['alt']); ?>"/>
                                <?php endif; ?>
                            </a>

                        <?php endwhile; ?>

                    </nav>

                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row footer__row footer__row-2">
            <div class="col-12 col-sm-6 col-lg-3">
                <?php if (has_nav_menu('footer-1')) { ?>
                    <h3 class="footer__title">
                        О КОМПАНИИ
                    </h3>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer-1',
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'depth' => 1,
                    ]); ?>
                <?php } ?>

                <?php if (has_nav_menu('footer-2')) { ?>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer-2',
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'depth' => 1,
                    ]); ?>

                <?php } ?>

            </div>

            <div class="col-12 col-sm-6 col-lg-3">

                <?php if (has_nav_menu('footer-3')) { ?>

                    <h3 class="footer__title">УСЛОВИЯ ПЕРЕВОЗОК</h3>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer-3',
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'depth' => 1,
                    ]); ?>

                <?php } ?>


                <?php if (has_nav_menu('footer-4')) { ?>

                    <h3 class="footer__title">ТАРИФЫ</h3>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer-4',
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'depth' => 1,
                    ]); ?>

                <?php } ?>

            </div>

            <div class="col-12 col-sm-6 col-lg-3">

                <?php if (has_nav_menu('footer-5')) { ?>

                    <h3 class="footer__title">ЛОГИСТИКА</h3>

                    <?php wp_nav_menu([
                        'theme_location' => 'footer-5',
                        'container' => false,
                        'menu_class' => 'footer__nav',
                        'depth' => 1,
                    ]); ?>

                <?php } ?>

            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center">
                <a href="tel:<?php the_field('osnovnoj_telefon_ssylka', 'option'); ?>" class="footer__tel-bold"
                   itemprop="telephone">
                    <?php the_field('osnovnoj_telefon_tekst', 'option'); ?>
                </a>
                <a href="#" class="footer__call js-call">ЗАКАЗАТЬ ЗВОНОК</a>
                <a href="#" class="btn btn-transparent-border btn-transparent-border-black footer__btn js-query">ОНЛАЙН
                    - ЗАЯВКА</a>

                <h3 class="footer__title">
                    ГРАФИК РАБОТЫ
                </h3>

                <?php if (have_rows('vremya_raboty_footer', 'option')) : ?>
                    <?php while (have_rows('vremya_raboty_footer', 'option')) : the_row(); ?>

                        <p class="footer__text">
                            <?php the_sub_field('vremya_raboty'); ?>
                        </p>

                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-sm-9">
                <p  class="footer__copy footer_inline">
                    <?php the_field( 'kopirajt', 'option' ); ?>
                </p>


                <span class="footer_inline"><?php
                if (has_nav_menu('copyright-menu')) {
                    wp_nav_menu([
                        'theme_location' => 'copyright-menu',
                        'container' => false,
                        'menu_class' => 'footer-submenu',
                        'depth' => 1,
                    ]);
                }
                ?>

            </span>
            </div>
        </div>
    </div>
</footer>

<!-- MODAL -->
<aside class="js-sidebars">
    <section class="modal adaptive-menu">
        <a href="#" class="modal__exit-2">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                 class="adaptive-menu__exit">
        </a>
    </section>

    <section class="modal modal-region">
        <div class="modal__wrapper modal-region__wrapper">
            <a href="#" class="modal__exit">

                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-region__exit">
            </a>

            <h2 class="modal__title modal-region__title">Выбрать район</h2>
            <div class="modal-region__row">
                <p class="modal-region__city">
                    Ваш город: <span class="js-select-city">Москва</span>?
                </p>
                <a href="#"
                   class="btn btn btn-transparent-border btn-transparent-border-black modal-region__btn js-region-close">
                    да
                </a>

            </div>


            <?php if (have_rows('spisok_gorodov', 'option')) : ?>

                <ul class="modal-region__list">

                    <?php while (have_rows('spisok_gorodov', 'option')) : the_row(); ?>

                        <li>
                            <a href="#" class="modal-region__link">
                                <?php the_sub_field('nazvanie_goroda'); ?></a>
                        </li>

                    <?php endwhile; ?>

                </ul>

            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>


        </div>
    </section>

    <section class="modal modal-call">
        <div class="modal__wrapper modal-call__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-call__exit">
            </a>

            <h3 class="modal__title modal-call__title">
                Заполните пожалуйста форму
                и мы вам перезвоним
            </h3>

            <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="588" title="ЗАКАЗАТЬ ЗВОНОК"]') ?>
            </div>

        </div>
    </section>

    <section class="modal modal-query">
        <div class="modal__wrapper modal-subscribe__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-query__exit">
            </a>
            <h3 class="modal__title modal-subscribe__title">
                Заполните пожалуйста форму.
            </h3>
            <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="5" title="ОНЛАЙН - ЗАЯВКА"]') ?>
            </div>
        </div>
    </section>

    <section class="modal modal-calc">
        <div class="modal__wrapper modal-subscribe__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-calc__exit">
            </a>
            <h3 class="modal__title modal-subscribe__title">
                Заполните пожалуйста форму.
            </h3>
            <div class="modal-form">
                <?php echo do_shortcode('[contact-form-7 id="596" title="Калькулятор"]') ?>
            </div>
        </div>
    </section>


    <section class="modal modal-subscribe">
        <div class="modal__wrapper modal-subscribe__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-subscribe__exit">
            </a>
            <h3 class="modal__title modal-subscribe__title">
                Подпишись на свежие <br>
                статьи и новости
            </h3>
            <div class="modal-form">
                <form action="POST">
                    <div class="modal-form__wrapper">
              <span>
                <input type="text" class="form-control form__input" placeholder="Имя">
              </span>
                        <span>
                <input type="tel" class="form-control form__input" placeholder="Email">
              </span>
                        <span>
                <button type="submit" class="btn btn-transparent-border btn-transparent-border-black modal-form__btn">подписаться</button>
              </span>
                    </div>
                    <div class="modal-form__agreement">
                        Я согласен условиями предоставления
                        услуг и обработкой моих персональных
                        данных при нажатии “Подписаться”
                    </div>

                </form>
            </div>
        </div>
    </section>

    <section class="modal modal-job">
        <div class="modal__wrapper modal-job__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-job__exit">
            </a>
            <h3 class="modal__title">
                Откликнутся на вакансию
            </h3>
            <div class="modal-form">

                <?php echo do_shortcode('[contact-form-7 id="873" title="Откликнутся на вакансию"]'); ?>

            </div>
        </div>
    </section>

    <section class="modal modal-personal">
        <div class="modal__wrapper modal-personal__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-personal__exit">
            </a>
            <h3 class="modal__title">
                Персональные данные
            </h3>
            <div class="modal-form">
                <form action="POST">
                    <div class="modal-form__wrapper">
              <span>
                <input type="text" class="form-control form__input" placeholder="Имя">
              </span>
                        <span>
                <input type="text" class="form-control form__input" placeholder="Фамилия">
              </span>
                        <span>
                <input type="text" class="form-control form__input" placeholder="Отчество">
              </span>
                        <span>
                <input type="tel" class="form-control form__input" placeholder="Телефон">
              </span>
                        <span>
                <input type="email" class="form-control form__input" placeholder="Email">
              </span>
                        <span>
                <textarea name="your-address" class="form-control form__input form__textarea-long" cols="30" rows="10"
                          placeholder="Адрес"></textarea>
              </span>


                        <div class="modal-form__btns">
                            <button type="submit"
                                    class="btn btn-transparent-border btn-transparent-border-black modal-form__btn">
                                ИЗМЕНИТЬ
                            </button>
                            <button type="reset"
                                    class="btn btn-transparent-border modal-form__btn modal-personal__exit">Отмена
                            </button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>

    <section class="modal modal-faq">
        <div class="modal__wrapper modal-personal__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-faq__exit">
            </a>
            <h3 class="modal__title">
                Уважаемый посетитель
            </h3>
            <h4 class="modal__subtitle">
                Если у Вас еще остались вопросы, можете задать их через форму обратной связи.
                Мы ответим на указанный e-mail.
            </h4>
            <div class="modal-form">
                <form action="POST">
                    <div class="modal-form__wrapper">
              <span>
                <input type="text" class="form-control form__input" placeholder="Ваше имя">
              </span>
                        <span>
                <input type="tel" class="form-control form__input" placeholder="Телефон">
              </span>
                        <span>
                <input type="email" class="form-control form__input" placeholder="Email">
              </span>
                        <span>
                <textarea name="your-reviews-2" cols="30" rows="10" class="form-control form__input form__textarea-long"
                          placeholder="Отзыв"></textarea>
              </span>
                        <span>
                <button type="submit" class="btn btn-transparent-border btn-transparent-border-black modal-form__btn">ОТПРАВИТЬ</button>
              </span>
                    </div>
                    <div class="modal-form__agreement">
                        Я согласен условиями предоставления
                        услуг и обработкой моих персональных
                        данных при нажатии “Отправить”
                    </div>

                </form>
            </div>
        </div>
    </section>

    <section class="modal modal-reviews">
        <div class="modal__wrapper modal-reviews__wrapper">
            <a href="#" class="modal__exit">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/mex.svg" alt=""
                     class="modal-reviews__exit">
            </a>
            <h3 class="modal__title">
                Оставить отзыв
            </h3>
            <div class="modal-form">
                <form action="POST">
                    <div class="modal-form__wrapper">

              <span>
                <input type="text" class="form-control form__input" placeholder="Ваше имя">
              </span>

                        <span>
                <input type="email" placeholder="Email" class="form-control form__input">
              </span>
                        <span>
                <textarea name="your-reviews-2" cols="30" rows="10" class="form-control form__input form__textarea-long"
                          placeholder="Отзыв"></textarea>
              </span>
                        <div class="modal-form__star">
                            Ваша оценка
                            <ul class="rating-star js-rating js-rating-modal">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <input type="hidden" class="form-control" value="0" name="rating" id="js-rating-modal">
                        </div>
                        <span>
                <label for="your-photo" class="form__upload">Загрузить фото</label>
                <input type="file" id="your-photo" class="form-control d-none">
              </span>

                        <span>
                <button type="submit" class="btn btn-transparent-border btn-transparent-border-black modal-form__btn">ОТПРАВИТЬ</button>
              </span>
                    </div>
                    <div class="modal-form__agreement">
                        Я согласен условиями предоставления
                        услуг и обработкой моих персональных
                        данных при нажатии “Отправить”
                    </div>
                </form>
            </div>
        </div>
    </section>
</aside>
<!-- !MODAL -->

<?php wp_footer(); ?>

</body>
</html>
