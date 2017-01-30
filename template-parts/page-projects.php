<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-projects.css" />

<div class="projects">
  <div class="idea-button">
    <button class="idea-button__button">Есть идея!</button>
  </div>

  <div class="section-header">
    <p class="section-header__dash"></p>
    <p class="section-header__text">Проекты</p>
    <p class="section-header__dash"></p>
  </div>

  <div class="projects__search-form">
    <form>
      <!-- <img
        class="projects__search-icon"
        src="<?php bloginfo('template_directory'); ?>/assets/search-icon.png" /> -->
      <input
        class="projects__search-input"
        type="text"
        placeholder="Поиск проекта"
        style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/search-icon.png')" />
    </form>
  </div>

  <p class="projects__search-type">По популярности</p>

  <div class="projects__grid">
    <div class="idea-grid">
    <?php for($i = 0; $i < 5; $i++): ?>
      <div class="idea-card">
        <h1 class="idea-card__category">Медицина</h1>
        <div  class="idea-card__image"
              style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/card-medicine.png')">
        </div>
        <div class="idea-card__info">
          <h2 class="idea-card__name">Новый мой</h2>
          <p class="idea-card__description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
          </p>
          <div class="idea-card__actions">
            <div class="idea-card__action idea-card__action--reply">
              <img  class="idea-card__action-icon"
                    src="<?php bloginfo('template_directory'); ?>/assets/idea-card-action-reply.png"
              />
              <p class="idea-card__action-description">ответы</p>
              <p class="idea-card__action-counter">0</p>
            </div>

            <div class="idea-card__action idea-card__action--like">
              <img  class="idea-card__action-icon"
                    src="<?php bloginfo('template_directory'); ?>/assets/idea-card-action-like.png"
              />
              <p class="idea-card__action-description">понравилось</p>
              <p class="idea-card__action-counter">0</p>
            </div>

            <div class="idea-card__action idea-card__action--add">
              <img  class="idea-card__action-icon"
                    src="<?php bloginfo('template_directory'); ?>/assets/idea-card-action-reply.png"
              />
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
    </div>
  </div>
</div>
