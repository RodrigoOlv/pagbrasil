<section class="table-section">
    <div class="container">

        <?php if ( $args['title'] ) : ?>
            <h2 class="text-primary mb-3"><?php echo $args['title'] ?></h2>
        <?php endif; ?>

        <table id="<?php echo $args['id']; ?>" class="table table-responsive table-striped table-hover table-borderless">
            <?php if ( $args['headers'] ) : ?>
                <thead>
                    <tr class="text-primary">
                        <?php foreach ( $args['headers'] as $header ) : ?>
                            <th><?php echo $header; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
            <?php endif; ?>
            <tbody></tbody>
        </table>
    </div>
</section>