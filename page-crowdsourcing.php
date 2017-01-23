<!DOCTYPE html>
<html>
	<?php get_template_part('head'); ?>

	<body>
		<div class="header-wrapper">
			<?php get_header(); ?>
		</div>
		<div class="container page-crowdsourcing-wrapper">
			<?php get_template_part('template-parts/page-crowdsourcing', 'content'); ?>
		</div>
		<div class="footer-wrapper">
			<?php get_footer(); ?>
		</div>
	</body>
</html>
