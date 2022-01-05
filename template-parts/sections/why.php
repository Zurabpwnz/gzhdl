<?php if ( have_rows( 'pochemu_nam_doveryayut', 'option' ) ) : ?>

    <section class="why">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="title">Почему нам доверяют</h2>
                </div>

				<?php $key = 0; while ( have_rows( 'pochemu_nam_doveryayut', 'option' ) ) : the_row(); $key++; ?>

                    <div class="col-12 col-md-6">
                        <div class="why-item">
                            <div class="why-item__left">
                                <div class="why-item__num">
                                    <?php echo $key; ?>
                                </div>
                                <div class="why-item__img">

	                                <?php $ikonka = get_sub_field( 'ikonka' ); ?>
	                                <?php if ( $ikonka ) : ?>
                                        <img src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                             alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>
	                                <?php endif; ?>

                                </div>
                            </div>
                            <div class="why-item__right">
                                <h3 class="why-item__title"><?php the_sub_field( 'nazvanie' ); ?></h3>
                                <div class="why-item__text"><?php the_sub_field( 'opisanie' ); ?></div>
                            </div>
                        </div>
                    </div>

				<?php endwhile; ?>

            </div>
        </div>
    </section>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
