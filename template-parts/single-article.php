<div class="thumbnail">
	<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
	<div class="caption">
		<h3><a href="<?php the_permalink($post); ?>"><?php the_title(); ?></a></h3>
		<h5><?php _e(__('Опубликовано', 'hv-serikoff') . ':'); ?> <?php the_time('F jS, Y'); ?></h5>
		<p><?php the_tags('<ul class="list-inline"><li class="label label-default">', '</li><li>', '</li></ul>'); ?></p>
		<p><?php the_post(); the_content(); ?></p>
	</div>
</div>
