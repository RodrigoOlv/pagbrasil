<?php if ( $args['cols'] ) : ?>
    <section class="columns">
        <div class="container">
            <div class="row">
                <?php foreach ( $args['cols'] as $col ) : ?>
                    <div class="col-md-6 col-item">
                        <?php echo $col['content']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>