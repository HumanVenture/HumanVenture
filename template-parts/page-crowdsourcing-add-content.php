<style>
	.wrapper {
		margin-top: 20px;
	}

	.wrapper > header {
		margin-bottom: 10px;
		margin-left: 40px;
		margin-right: 40px;
	}

	.form-control, .btn {
		border-radius: initial;
	}

	header, label, .btn {
		text-transform: uppercase;
	}

	label {
		font-weight: initial;
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

	h2, .form-control, option {
		color: #86a5b4;
	}
</style>

<?php
	$user_must_login = false;
	$access_deny = false;
	$post_create_failure = false;
	$media_upload_failure = false;
	$redirect = false;

	$user_id = get_current_user_id();
	if(!$user_id) {
		$user_must_login = true;
	} else if(isset($_POST['submit'])) {
		if(current_user_can('edit_posts')) {
			$title = sanitize_text_field($_POST['crowdsourcing-title']);
			$description = $_POST['crowdsourcing-description'];
			$category = sanitize_text_field($_POST['crowdsourcing-category']);
			$commercialization = sanitize_text_field($_POST['crowdsourcing-commercialization']);
			$money = sanitize_text_field($_POST['crowdsourcing-money']);
			$period = sanitize_text_field($_POST['crowdsourcing-period']);
			$scalability = sanitize_text_field($_POST['crowdsourcing-scalability']);

			if(get_page_by_title($title) == null) {
				$post_id = wp_insert_post(
					array(
						'post_title'    => $title,
						'post_content'  => $description,
						'post_category' => array(get_cat_ID(__('Лаборотория идей', 'hv-serikoff')), get_cat_ID($category)),
						'post_status'   => 'publish',
						'meta_input'    => array(
							'commercialization' => $commercialization,
							'money'             => $money,
							'period'            => $period,
							'scalability'       => $scalability
						)
					), true
				);

				if(!is_wp_error($post_id)) {
					require_once(ABSPATH . 'wp-admin/includes/image.php');
					require_once(ABSPATH . 'wp-admin/includes/file.php');
					require_once(ABSPATH . 'wp-admin/includes/media.php');

					$attachment_id = media_handle_upload('crowdsourcing-attachments', $post_id);
					if(!is_wp_error($attachment_id)) {
						set_post_thumbnail($post_id, $attachment_id);
						$redirect = true;
					} else {
						$media_upload_failure = true;
					}
				} else {
					$post_create_failure = true;
				}
			}
		} else {
			$access_deny = true;
		}
	}
?>

<?php if($redirect): ?>
	<script>
		window.location.href = "<?php echo bloginfo('url') . '/crowdsourcing'; ?>"
	</script>	
<?php endif; ?>

<div class="wrapper">
	<header>
		<?php if($access_deny || $post_create_failure || $media_upload_failure): ?>
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-error alert-dismissible" role="alert">
						<button class="close" data-dismiss="alert" aria-label="Close" type="button"><span aria-hidden="true">&times;</span></button>
						<strong><?php echo __('Ой!', 'hv-serikoff'); ?></strong> <?php echo __('Что-то пошло не так. Мы уже работаем над проблемой.', 'hv-serikoff'); ?>
					</div>
				</div>
			</div>
		<?php else: ?>
			<?php if($user_must_login): ?>
				<div class="row">
					<div class="col-xs-12">
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button class="close" data-dismiss="alert" aria-label="Close" type="button"><span aria-hidden="true">&times;</span></button>
							<strong><?php echo __('Внимание!', 'hv-serikoff'); ?></strong> <?php echo __('Войдите, пожалуйста, через ваш профиль или зарегистрируйтесь.', 'hv-serikoff'); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-xs-offset-5 col-xs-2">
					<img class="center-block" height="80" width="80" src="<?php bloginfo('template_url'); ?>/idea.png">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h2><p class="text-center"><?php echo __('Есть идея!', 'hv-serikoff'); ?></p></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="title text-center"><?php echo __('Мой проект', 'hv-serikoff'); ?></p>
				</div>
			</div>
		<?php endif; ?>
	</header>
	<main>
		<form class="form-horizontal" action="<?php the_permalink(); ?>" method="post" enctype="multipart/form-data">
			<?php if(!$access_deny): ?>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="title"><?php echo __('Название идеи', 'hv-serikoff'); ?></label>
				</div>
					<div class="col-xs-12 col-sm-3">
						<input id="title" class="form-control" name="crowdsourcing-title" type="text"  autocomplete="off" autofocus maxlength="50" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="direction"><?php echo __('Направление', 'hv-serikoff'); ?></label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<select id="category" class="form-control" name="crowdsourcing-category" required>
							<option><?php echo __('Альтернативная энергетика', 'hv-serikoff'); ?></option>
							<option><?php echo __('Борьба с бедностью', 'hv-serikoff'); ?></option>
							<option><?php echo __('Космос', 'hv-serikoff'); ?></option>
							<option><?php echo __('Медицина', 'hv-serikoff'); ?></option>
							<option><?php echo __('Образование', 'hv-serikoff'); ?></option>
							<option><?php echo __('Экология', 'hv-serikoff'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="commercialization"><?php echo __('Коммерческая идея', 'hv-serikoff'); ?></label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<select id="commercialization" class="form-control" name="crowdsourcing-commercialization" required>
							<option><?php echo __('Да', 'hv-serikoff'); ?></option>
							<option><?php echo __('Нет', 'hv-serikoff'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="money"><?php echo __('Сумма для реализации, USD', 'hv-serikoff'); ?></label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<input id="money" class="form-control" name="crowdsourcing-money" type="number" autocomplete="off" autofocus min="0" max="999999999" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="period"><?php echo __('Срок реализации', 'hv-serikoff'); ?></label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<select id="period" class="form-control" name="crowdsourcing-period" required>
							<option><?php echo __('> 1 года', 'hv-serikoff'); ?></option>
							<option><?php echo __('1-2 года', 'hv-serikoff'); ?></option>
							<option><?php echo __('3-5 лет', 'hv-serikoff'); ?></option>
							<option><?php echo __('6 и более лет', 'hv-serikoff'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="scalability"><?php echo __('Маштабируемость', 'hv-serikoff'); ?></label>
					</div>
					<div class="col-xs-12 col-sm-3">
						<select id="scalability" class="form-control" name="crowdsourcing-scalability" required>
							<option><?php echo __('выход на региональный рынок', 'hv-serikoff'); ?></option>
							<option><?php echo __('выход на российский рынок', 'hv-serikoff'); ?></option>
							<option><?php echo __('выход на мировой рынок', 'hv-serikoff'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="description"><?php echo __('Описание идеи', 'hv-serikoff'); ?></label>
				</div>
					<div class="col-xs-12 col-sm-3">
						<textarea id="description" class="form-control" name="crowdsourcing-description" rows="15" maxlength="5000" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3">
						<label for="attachments"><?php echo __('Прикрепите изображение или видео', 'hv-serikoff'); ?></label>
				</div>
					<div class="col-xs-12 col-sm-3">
						<input id="attachments" class="form-control" name="crowdsourcing-attachments" type="file" accept="video/*|image/*" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-4 col-sm-4">
						<?php if($user_must_login): ?>
							<button id="submit" class="btn btn-primary btn-lg btn-block" name="submit" type="submit" disabled><?php echo __('Зарегистрировать идею', 'hv-serikoff'); ?></button>
						<?php else: ?>
							<button id="submit" class="btn btn-primary btn-lg btn-block" name="submit" type="submit"><?php echo __('Зарегистрировать идею', 'hv-serikoff'); ?></button>
						<?php endif; ?>
					</div>
				</div>
			<?php else: ?>
				<div class="form-group">
					<div class="col-xs-12 col-sm-offset-4 col-sm-4">
						<button id="submit" class="btn btn-primary btn-lg btn-block" name="submit" type="reset" onclick="location.reload();"><?php echo __('Перезагрузить страницу', 'hv-serikoff'); ?></button>
					</div>
				</div>
			<?php endif; ?>
		</form>
	</main>
</div>
