<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css" /> 

<div class="home">
	<div class="carousel-wrapper">
		<?php get_template_part('template-parts/home', 'carousel'); ?>
	</div>
	<div class="metrics-wrapper">
		<?php get_template_part('template-parts/home', 'metrics'); ?>
	</div>
</div>
