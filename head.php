<head>
	<title>HumanVenture</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.slim.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>

	<div id="fb-root"></div>
	<script src="//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8"></script>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId: '1396348913748779',
				cookie: true,
				xfbml: true,
				version: 'v2.8'
			});

			FB.AppEvents.logPageView();
		}
	</script>

	<script src="//vk.com/js/api/openapi.js?136"></script>
	<script>
		VK.init({
			apiId: 5767854,
		});
	</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<style>
		.main-header {
			background-image: url("<?php bloginfo('template_url'); ?>/header_background.png");
		}
	</style>
</head>
