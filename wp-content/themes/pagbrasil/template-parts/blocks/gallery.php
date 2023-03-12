<?php if ( $args['images'] ) : ?>
    <section class="gallery">
        <div class="container">
            <div class="gallery-carousel">
                <?php foreach ( $args['images'] as $img ) : ?>
                    <div class="img-wrapper">
                        <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>