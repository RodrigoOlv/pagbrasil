<?php get_header(); ?>

<main class="main-container">
	
	<?php
		$args = [
			'background'	=> get_field('banner_image')['url'],
			'content'		=> get_field('banner_content')
		];

		_get_template_part('template-parts/blocks/hero', $args);
	?>
	
	<?php
		$args = [
			'cols'	=> get_field('cols')
		];

		_get_template_part('template-parts/blocks/columns', $args);
	?>
	
	<?php
		$args = [
			'images'	=> get_field('gallery')
		];

		_get_template_part('template-parts/blocks/gallery', $args);
	?>
	
	<?php
		$posts = new WP_Query([
			'post_type' 		=> 'post',
			'post_status' 		=> 'publish',
			'posts_per_page'	=> 3
		]);

		$args = [
			'title' => __('Blog', 'pagbrasil-theme'),
			'posts'	=> $posts
		];

		_get_template_part('template-parts/blocks/blog', $args);
	?>

</main>

<?php get_footer(); ?>