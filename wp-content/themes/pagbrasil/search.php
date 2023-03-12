<?php get_header(); ?>
	<div class="content">
		<div class="container blog">

			<h2><?php _e('Pesquisa', ''); ?>: <?php  echo get_search_query(true)  ?></h2>

			<?php if ( have_posts() ) : ?>
				
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							$args = [
								'permalink'     => get_the_permalink(),
								'category'      => get_the_category()[0]->name,
								'thumbnail_url' => get_the_post_thumbnail_url(),
								'thumbnail_alt' => get_the_post_thumbnail_caption(),
								'title'         => get_the_title(),
								'resume'        => resume()
							];

							_get_template_part('template-parts/blocks/blog-item', $args);                  
						?>
					<?php endwhile; ?>
				</div>

			<?php else: ?>

				<p><?php _e('Nenhum resultado encontrado.'); ?></p>

			<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
