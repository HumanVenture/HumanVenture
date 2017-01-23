<!DOCTYPE html>
<html>
	<?php get_template_part('head'); ?>

	<body>
		<div class="header-wrapper">
			<?php get_header(); ?>
		</div>
		<div class="container single">
			<?php get_template_part('template-parts/single', 'content'); ?>
		</div>
		<div class="footer-wrapper">
			<?php get_footer(); ?>
		</div>
	</body>
</html>
