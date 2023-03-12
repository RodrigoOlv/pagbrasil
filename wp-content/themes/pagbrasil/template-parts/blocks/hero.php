<section class="hero" style="background-image: url(<?php echo $args['background']; ?>)">
    <?php if ( $args['content'] ) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php echo $args['content']; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>