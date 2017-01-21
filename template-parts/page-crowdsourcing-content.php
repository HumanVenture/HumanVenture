<!--
	Переделать полностью. В топку текущую реализацию.
-->
<style>
	.page-crowdsourcing {
		margin-left: 50px;
		margin-right: 50px;
	}

	header:first-child > .row:first-child {
		margin: 20px;
	}

	header .row [class*='col-'] * {
		text-transform: uppercase;
	}

	.btn {
		border-radius: initial;
	}

	.title {
		overflow: hidden;
	}

	.title:before, .title:after {
		content: '';
		display: inline-block;
		vertical-align: middle;
		height: 1px;
		width: 100%;
		background: gray;
	}

	.title:before {
		margin-left: -100%;
		margin-right: 20px;
	}

	.title:after {
		margin-right: -100%;
		margin-left: 20px;
	}

	.thumbnail a {
		text-transform: uppercase;
	}

	.caption.text-center > * {
		display: block;
	}
</style>
<?php
	$more = false;
	$row_count = 1;
	if(isset($_POST['submit'])) {
		$more = true;
		$row_count = PHP_INT_MAX;
	}
?>
<div class="page-crowdsourcing">
	<header class="header">
		<div class="row">
			<div class="col-xs-5 col-xs-offset-1">
				<button type="button" onclick="location.href = '<?php bloginfo('url'); ?>/crowdsourcing-add';" class="btn btn-primary btn-lg btn-block"><?php echo __('Есть идея!', 'hv-serikoff'); ?></button>
			</div>
			<div class="col-xs-5">
				<button type="button" class="btn btn-primary btn-lg btn-block" onclick="feedFilterToggle();"><?php echo __('Хочу инвестировать', 'hv-serikoff'); ?></button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p class="title text-center"><?php echo __('Проекты', 'hv-serikoff'); ?></p>
			</div>
		</div>
	</header>
	<main class="feed-wrapper">
		<div class="row">
			<style>
				.hide-and-collapse {
					visibility:collapse;
					visibility:hidden;
				}
			</style>
			<div id="feed-filter-container" class="col-xs-6 hide-and-collapse">
				<div class="row">
					<div class="col-xs-3">
						<label for="direction"><?php echo __('Направление', 'hv-serikoff'); ?></label>
					</div>
				</div>
				<script>
					function feedColumnReduce(feed, column) {
						column.map(function() {
							var column = $(this);

							var row = column.parent(".row").next(".row").map(function() {
								var row = $(this);

								column.prependTo(row);

								return row;
							}).get();

							if(row.length === 0) {
								row = $("<div>", {"class": "row row-flex"});
								row.appendTo(feed);
							}

							column.prependTo(row);
						});
					}

					function feedFilterToggle() {
						jQuery(document).ready(function($) {
							var rowSelector = ".row";
							var allColumnSelector = "[class*='col-']";
							var feedFilterContainer = $("#feed-filter-container");
							var feedContentContainer = $("#feed-content-container");
							var feed =feedContentContainer.children(".feed");
							var feedReduce = feed.filter(":not(.reduce)");
							var feedExpand= feed.filter(".reduce");
							var row = feed.children(rowSelector);
							var rowReduce = feedReduce.children(rowSelector);
							var rowExpand = feedExpand.children(rowSelector);
							var allColumn = row.children(allColumnSelector);
							var allColumnReduce = rowReduce.children(allColumnSelector);
							var allColumnExpand = rowExpand.children(allColumnSelector);
							var columnReduce = allColumnReduce.filter(":last-child:nth-child(3)");
							var columnExpand = allColumnExpand.filter(":first-child");

							{
								var feedNew = $("<div>", {"class": "feed"});

								rowReduce.map(function() {
									var row = $(this);
									var rowIndex = row.index();

									$("<div>", {"class": "row row-flex"}).appendTo(feedNew);

									row.children(allColumnSelector).map(function() {
										var column = $(this);
										var columnIndex = column.index();

										var nm = parseInt((rowIndex * 3 + columnIndex).toString(2), 2);
										var n0 = Math.floor(nm / 10);
										var m0 = nm % 2;
										var rowSelector = ".row:nth-child(" + n0 + ")";
										var row = feedNew.children(rowSelector);
										column.appendTo(row);
									});
								});

								feed.replaceWith(feedNew);
								feed = feedNew;
							}

							feedFilterContainer.toggleClass("hide-and-collapse");
							feedContentContainer.toggleClass("col-xs-12 col-xs-6");
							feed.toggleClass("reduce");
							allColumn.toggleClass("col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-6 col-sm-6 col-md-6 col-lg-6");
						});
					}
				</script>
			</div>
			<div id="feed-content-container" class="col-xs-12">
			<?php
				set_query_var('posts_filter', array('category_name' => 'crowdsourcing'));
				set_query_var('row_count', $row_count);
				set_query_var('row_class', 'row row-flex');
				set_query_var('column_count', 3);
				set_query_var('column_class', 'col-xs-12 col-sm-4 col-md-4 col-lg-4');
				get_template_part('template-parts/feed');
			?>
			</div>
			<div class="feed-more-container">
			<?php if(!$more): ?>
				<form id="more" class="form-horizontal" action="<?php the_permalink(); ?>" method="post">
					<div class="form-group">
						<div class="col-xs-offset-4 col-xs-4">
							<button id="submit" class="btn btn-primary btn-lg btn-block" name="submit" type="submit"><?php echo __('Просмотреть всё', 'hv-serikoff'); ?></button>
						</div>
				</div>
				</form>
			<?php endif; ?>
			</div>
		</div>
	</main>
</div>
