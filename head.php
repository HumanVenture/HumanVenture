<head>
	<title>HumanVenture</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

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
		#main-footer {
			border-top: 4px solid #005e8a;
		}

		.main-header {
			background-image: url("<?php bloginfo('template_url'); ?>/header_background.png");
			background-repeat: no-repeat;
			background-position: center; 
			background-size: cover;
		}

		.main-header .navbar {
			background-color: transparent;
			border-color: transparent;
		}

		.main-header .navbar {
			margin-bottom: 0px;
			border: none;
		}

		.main-header .navbar-header {
			color: #ffffff;
		}

		.main-header .navbar-header .tagline {
			font-size: 13pt;
			text-transform: uppercase;
		}

		.main-header .navbar-header .info {
			font-size: 10pt;
		}

		.main-header .navbar-header .btn {
			background-color: transparent;
			border-color: #ffffff;
			text-transform: uppercase;
		}

		.nav.nav-justified > li > a {
			color: #4c4949;
			background-color: #ffffff;
			font-size: 14pt;
			text-transform: uppercase;
		}

		.nav.nav-justified > li > ul > li > a {
			font-size: 11pt;
		}

		:not(.feed) > .row:first-child > [class*='col-'] > .thumbnail:first-child {
			border: 1px hidden;
		}

		.row:first-child > [class*='col-'] > .thumbnail:first-child {
			margin-top: 20px;
		}

		.posts > .row > [class*='col-'].single > .thumbnail:first-child > img:first-child {
			float: left;
			padding: 10px 10px;
			padding-top: 35px;
		}

		.posts > .row > [class*='col-'].tape > .thumbnail:first-child > a:first-child > img {
				height: 200px;
				width: auto;
		}

		.posts > .row > [class*='col-'] > .thumbnail:first-child > .caption:first-child > h3:first-child > a:first-child {
			font-size: 16pt;
		}

		.label > a {
			color: inherit;
		}

		.form-control, .btn {
			border-radius: initial;
		}
	</style>
</head>
