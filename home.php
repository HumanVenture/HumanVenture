<!DOCTYPE html>
<html>
	<?php get_template_part('head'); ?>

	<body>
		<div class="header-wrapper">
			<?php get_header(); ?>
		</div>
		<div class="container home-wrapper">
			<?php get_template_part('template-parts/idea-search', 'content'); ?>
		</div>
		<div class="footer-wrapper">
			<?php get_footer(); ?>
		</div>
	</body>
</html>
