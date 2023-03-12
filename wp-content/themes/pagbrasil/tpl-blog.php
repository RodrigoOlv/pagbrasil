<?php // Template Name: Blog ?>

<?php get_header(); ?>

<main class="main-container blog-page">

    <?php
		$args = [
			'background'	=> get_field('banner_image')['url'],
			'content'		=> get_field('banner_content')
		];

		_get_template_part('template-parts/blocks/hero', $args);
	?>

    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$posts = new WP_Query([
			'post_type' 		=> 'post',
			'post_status' 		=> 'publish',
			'posts_per_page'	=> 6,
            'paged'             => $paged,
		]);

		if ( $posts->have_posts() ) :
	?>
        <section class="blog">
            <div class="container">
                <div class="row">
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

                <div class="pagination">
                    <?php

                        $big = 999999999;

                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $posts->max_num_pages
                        ));
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
        
</main>

<?php get_footer(); ?>