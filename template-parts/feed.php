<div class="feed">
	<?php
		$posts_array_chunks = array_chunk(get_posts($posts_filter), $column_count, true);
		foreach ($posts_array_chunks as &$posts_array) {
			if($row_count-- <= 0)
				break;
			set_query_var('posts_array', $posts_array);
			get_template_part('template-parts/feed', 'row');
		}
	?>
</div>
