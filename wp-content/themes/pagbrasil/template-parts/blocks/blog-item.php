<div class="col-md-4 blog-item">
    <a href="<?php echo $args['permalink']; ?>">
        <div class="img-wrapper">
            <img
                src="<?php echo $args['thumbnail_url'] ? $args['thumbnail_url'] : image('logo.jpeg'); ?>"
                alt="<?php echo $args['thumbnail_alt']; ?>"
            >
            <?php if( $args['category'] ) : ?>
                <span class="category"><?php echo $args['category'] ?></span>
            <?php endif; ?>
        </div>
        <p class="title"><strong><?php echo $args['title'] ?></strong></p>
        <div class="resume"><?php echo $args['resume'] ?></div>
    </a>
</div>