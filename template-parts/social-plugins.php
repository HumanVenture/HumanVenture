<div class="social-plugins">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#facebook"><?php echo __('Facebook', 'hv-serikoff'); ?></a></li>
		<li><a data-toggle="tab" href="#vk"><?php echo __('Вконтакте', 'hv-serikoff'); ?></a></li>
	</ul>

	<div class="tab-content">
		<div id="facebook" class="tab-pane fade in active">
			<div class="fb-comments" data-width="100%"></div>
		</div>
		<div id="vk" class="tab-pane fade">
			<div id="vk_comments"></div>
		</div>
	</div>

	<script>
		VK.Widgets.Comments("vk_comments");
	</script>
</div>
