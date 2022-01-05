<?php if ( have_rows( 'otraslevye_resheniya_po_perevozke_gruza', 'option' ) ) : ?>

    <section class="solutions">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Отраслевые решения по перевозке груза</h2>
                </div>

				<?php while ( have_rows( 'otraslevye_resheniya_po_perevozke_gruza', 'option' ) ) : the_row(); ?>

                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="solutions-item">
                            <div class="solutions-item__img">

								<?php $ikonka = get_sub_field( 'ikonka' ); ?>
								<?php if ( $ikonka ) : ?>

                                    <img src="<?php echo esc_url( $ikonka['url'] ); ?>"
                                         alt="<?php echo esc_attr( $ikonka['alt'] ); ?>"/>

								<?php endif; ?>

                            </div>
                        </div>
                        <h3 class="solutions-item__name"><?php the_sub_field( 'nazvanie' ); ?></h3>
                    </div>

				<?php endwhile; ?>

            </div>
        </div>
    </section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>