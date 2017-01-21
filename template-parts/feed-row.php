<div class="<?php echo $row_class ?>">
	<?php foreach($posts_array as &$post): setup_postdata($post); ?>
		<div class="<?php echo $column_class ?>">
			<div class="thumbnail">
				<?php
					$categories = wp_get_post_categories($post->ID);
					$selected_category;
					foreach($categories as &$category) {
					 $selected_category = get_category($category);
						if($selected_category->name == __('Лаборатория идей', 'hv-serikoff')) {
						  continue;
						}
						break;
					}
				?>
				<div class="text-center">
					<h4>
					<a href="#">
						<?php echo $selected_category->name; ?>
					</a>
					</h4>
				</div>
				<a href="<?php the_permalink($post); ?>">
					<?php echo get_the_post_thumbnail($post, 'medium', array('class' => 'img-responsive')); ?>
				</a>
				<div class="caption text-center">
					<h3><a href="<?php the_permalink($post); ?>"><?php echo get_the_title($post); ?></a></h3>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	<?php wp_reset_postdata(); endforeach; ?>
</div>
