<div class="row row-flex">
	<?php
		for ($i = 1; $resume && $i <= 4; $i++):
			the_post();
			$categories = get_the_category();
			foreach($categories as &$category) {
				if($category->name == __('Лаборатория идей', 'hv-serikoff')) {
					$resume = false;
				}
			}
			if(!$resume) {
				$resume = have_posts();
				break;
			}
		?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="thumbnail">
				<?php if (has_post_thumbnail()): ?>
					<a href="<?php the_permalink($post); ?>">
						<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
					</a>
				<?php endif; ?>
				<div class="caption">
					<h3><a href="<?php the_permalink($post); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	<?php $resume = have_posts(); endfor; set_query_var('resume', $resume); ?>
</div>
