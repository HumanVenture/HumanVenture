<div class="feed">
	<?php
		$resume = have_posts();
		if ($resume):
			while ($resume) {
				set_query_var('resume', $resume);
				get_template_part('template-parts/category-feed', 'row');
				$resume = get_query_var('resume'); 
			}
		else:
	?>
		<p><?php __('Извините, по вашим критериям не найдено ни одного поста.', 'hv-serikoff'); ?></p>
	<?php endif; ?>
</div>
