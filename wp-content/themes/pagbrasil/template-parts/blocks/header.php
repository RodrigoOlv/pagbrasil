<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo image('pagbrasil.svg'); ?>" alt="<?php echo bloginfo('name'); ?>" class="logo-color">
                <img src="<?php echo image('pagbrasil-white.svg'); ?>" alt="<?php echo bloginfo('name'); ?>" class="logo-light">
            </a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <?php
                    wp_nav_menu([
                        'container_class'   => 'ml-auto',
                        'menu_class'        => 'navbar-nav'
                    ])
                ?>
            </div>
        </nav>
    </div>
</header>