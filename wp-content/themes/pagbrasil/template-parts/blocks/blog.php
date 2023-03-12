<?php $posts = $args['posts']; ?>

<?php if ( $posts->have_posts() ) : ?>
    <section class="blog">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-primary mb-4"><?php echo $args['title']; ?></h2>
                <a href="<?php echo base_url('blog'); ?>" class="navlink"><?php _e('Ver mais', 'pagbrasil-theme'); ?></a>
            </div>
            
            <div class="row posts-carousel">
                <?php
                    while ( $posts->have_posts() ) {

                        $posts->the_post();

                        $args = [
                            'permalink'     => get_the_permalink(),
                            'category'      => get_the_category()[0]->name,
                            'thumbnail_url' => get_the_post_thumbnail_url(),
                            'thumbnail_alt' => get_the_post_thumbnail_caption(),
                            'title'         => get_the_title(),
                            'resume'        => resume()
                        ];

                        _get_template_part('template-parts/blocks/blog-item', $args);

                    }                    
                ?>
            </div>    
        </div>
    </section>
<?php endif; ?>