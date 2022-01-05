<?php if ( have_rows( 'kak_my_rabotaem', 'option' ) ) : ?>

    <section class="how">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Как мы работаем</h2>
                </div>

				<?php while ( have_rows( 'kak_my_rabotaem', 'option' ) ) : the_row(); ?>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="how-item">
                            <div class="how-item__img">
								<?php $ikonka = get_sub_field( 'ikonka' ); ?>
								<?php if ( $ikonka ) : ?>
                                    <img src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
								<?php endif; ?>
                            </div>
                            <h3 class="how-item__name"><?php the_sub_field( 'nazvanie' ); ?></h3>
                            <p class="how-item__text"><?php the_sub_field( 'opisanie' ); ?></p>
                        </div>
                    </div>

				<?php endwhile; ?>

            </div>
        </div>
    </section>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>











