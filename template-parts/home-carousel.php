<div id="carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
		<li data-target="#carousel" data-slide-to="4"></li>
		<li data-target="#carousel" data-slide-to="5"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<a href="<?php
				$category = __('Альтернативная энергетика', 'hv-serikoff'); 
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider02.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
				...
				</div>
			</div>
		</div>
		<div class="item">
			<a href="<?php
				$category = 'Борьба с бедностью';
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider04.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
					...
				</div>
			</div>
		</div>
		<div class="item">
			<a href="<?php
				$category = __('Космос', 'hv-serikoff');
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider03.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
					...
				</div>
			</div>
		</div>
		<div class="item">
			<a href="<?php
				$category = __('Медицина', 'hv-serikoff');
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider01.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
					...
				</div>
			</div>
		</div>
		<div class="item">
			<a href="<?php
				$category = __('Образование', 'hv-serikoff');
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider05.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
					...
				</div>
			</div>
		</div>
		<div class="item">
			<a href="<?php
				$category = __('Экология', 'hv-serikoff');
				$category_link = get_category_link(get_cat_ID($category));
				echo esc_url($category_link);
			?>">
				<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/<?php echo __('slider06.jpg', 'hv-serikoff'); ?>" alt="<?php echo $category; ?>">
			</a>
			<div class="container">
				<div class="carousel-caption">
					...
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only"><?php echo __('Предыдущий', 'hv-serikoff'); ?></span>
	</a>
	<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only"><?php echo __('Следующий', 'hv-serikoff'); ?></span>
	</a>
</div>
