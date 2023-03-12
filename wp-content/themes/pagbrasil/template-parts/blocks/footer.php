<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo base_url(); ?>" class="navbar-brand">
                    <img src="<?php echo image('pagbrasil-white.svg'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                </a>
            </div>
            <div class="col-md-4">
                <?php
                    wp_nav_menu([
                        'container_class'   => 'ml-auto',
                        'menu_class'        => 'navbar-nav'
                    ])
                ?>
            </div>
            <div class="col-md-4">
                <?php
                    $socials = get_field('social_media', 'options');

                    if ( $socials ) :
                ?>
                    <div class="social-media d-flex justify-content-md-end justify-content-center">
                        <?php foreach ( $socials as $social ) : ?>
                            <a href="<?php echo $social['url']; ?>" target="_blank">
                                <i class="fab fa-<?php echo $social['icon'] ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="copy mt-5 text-md-right text-center text-light">
            &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
        </div>
    </div>
</footer>