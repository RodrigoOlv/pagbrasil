<?php get_header(); ?>

<main class="main-container single-page">

	<?php				
		the_post();

		$args = [
			'background'	=> get_the_post_thumbnail_url(),
			'content'		=> '<h2>'. get_the_title() . '</h2>'
		];

		_get_template_part('template-parts/blocks/hero', $args);
		
		get_template_part('template-parts/blocks/content');	

		$posts = new WP_Query([
			'post_type' 		=> 'post',
			'post_status' 		=> 'publish',
			'posts_per_page'	=> 3,
			'cat'				=> get_the_category()[0]->term_id,
			'post__not_in'		=> array(get_the_ID())
		]);

		$args = [
			'title' => __('Veja também', 'pagbrasil-theme'),
			'posts'	=> $posts
		];

		_get_template_part('template-parts/blocks/blog', $args);
	?>

</main>

<?php get_footer(); ?>
