<header class="main-header">
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<div class="row main-header__t-language-switch-row">
					<div class="col-xs-12">
						<span class="languages-switcher-buttons">
							<button class="btn btn-primary btn-xs active language-switcher-button language-switcher-button-en" type="button" onclick="location.href='//en.hv.leinlawun.org';"><?php echo __('en', 'hv-serikoff'); ?></button>
							<button class="btn btn-primary btn-xs active language-switcher-button language-switcher-button-ru" type="button" onclick="location.href='//hv.leinlawun.org';"><?php echo __('ru', 'hv-serikoff'); ?></button>
						</span>
					</div>
				</div>
				<div class="row row-flex align main-header__t-logo-row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-offset-1 col-lg-7 main-header__t-logo">
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/logo_white.svg">
						</a>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-offset-2 col-lg-2 main-header__t-login">
						<span class="login-buttons">
							<button class="btn btn-primary btn-md active login-button-facebook" type="button" onclick="location.href='<?php bloginfo('url'); ?>/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Facebook';"><?php echo __('f', 'hv-serikoff'); ?></button>
							<button class="btn btn-primary btn-md active login-button-vkontakte" type="button" onclick="location.href='<?php bloginfo('url'); ?>/wp-login.php?action=wordpress_social_authenticate&mode=login&provider=Vkontakte';"><?php echo __('в', 'hv-serikoff'); ?></button>
						</span>
					</div>
				</div>
				<div class="row main-header__t-description-row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-offset-1 col-lg-7 main-header__t-description">
						<p class="text-center tagline tagline-1"><?php echo __('Хотите получить выгоду<br>от решения глобальных проблем человечества?<br>', 'hv-serikoff'); ?></p>
						<p class="text-center tagline tagline-2"><?php echo __('Присоединяйтесь к нам!<br>', 'hv-serikoff'); ?></p>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-offset-1 col-lg-3 main-header__t-user-counter">
						<p class="text-center info info-1"><?php echo __('Зарегистрированных пользователей', 'hv-serikoff'); ?>: <?php echo count(get_users()); ?></p>
					</div>
				</div>
				<button  class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false">
					<span class="sr-only"><?php echo __('Переключить режим навигации', 'hv-serikoff'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="row padding"></div>
			</div>
			<div cla-primary-collapsess="collapse navbar-collapse">
				<?php wp_nav_menu(array(
					'menu'            => 'main',
					'theme_location'  => 'primary',
					'depth'           => 2,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbar-collapse',
					'menu_class'      => 'nav nav-justified',
					'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
					'walker'          => new wp_bootstrap_navwalker())
				); ?>
			</div>
		</div>
	</nav>
</header>
