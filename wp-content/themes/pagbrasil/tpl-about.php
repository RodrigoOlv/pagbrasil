<?php // Template Name: Sobre nós ?>

<?php get_header(); ?>

<div class="main-container about-page">

    <?php
		$args = [
			'background'	=> get_field('banner_image')['url'],
			'content'		=> get_field('banner_content')
		];

		_get_template_part('template-parts/blocks/hero', $args);
	?>

    <?php get_template_part('template-parts/blocks/content'); ?>

    <?php
		$args = [
			'id' => 'employees',
			'title' => __('Funcionários', 'pagbrasil-theme'),
			'headers' => array(
				__('Nome', 'pagbrasil-theme'),
				__('Telefone', 'pagbrasil-theme'),
				__('E-mail', 'pagbrasil-theme'),
			)
		];
	
		_get_template_part('template-parts/blocks/table', $args);
	?>
    
</div>

<?php get_footer(); ?>