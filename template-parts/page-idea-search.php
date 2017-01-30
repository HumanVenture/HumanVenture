<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-idea-search.css" /> 

<div class="idea-search">
  <div class="idea-button">
    <button class="idea-button__button">Есть идея!</button>
  </div>
  <hr class="idea-search__hr" />

  <div class="idea-search__container">
    <div class="idea-search__search">
      <form class="input-context input-context--theme-basic">
        <div class="input-context__row input-context__row--hero">
          <div class="input-context__label-wrapper">
            <label for="hook-search-type" class="input-context__label input-context__label--hero">Поиск проекта</label>
          </div>

          <div class="input-context__input-wrapper">
            <select
            id="hook-search-type"
            name="search_type"
            class="
              input-context__input
              input-context__input--select
              input-context__input--hero">
              <option>По популярности</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-direction" class="input-context__label">Направление</label>
          </div>

          <div class="input-context__input-wrapper">
            <select id="hook-direction" name="direction" class="input-context__input input-context__input--select">
              <option>Энергетика</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-is-commercial" class="input-context__label">Коммерческая идея</label>
          </div>

          <div class="input-context__input-wrapper">
            <select id="hook-is-commercial" name="is_commercial" class="input-context__input input-context__input--select">
              <option>Да</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-cost" class="input-context__label">Сумма для реализации, USD</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-cost" name="cost" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-deadline" class="input-context__label">Срок реализации</label>
          </div>

          <div class="input-context__input-wrapper">
            <select id="hook-deadline" name="deadline" class="input-context__input input-context__input--select">
              <option>&lt 1 года</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-scalability" class="input-context__label">Масштабируемость</label>
          </div>

          <div class="input-context__input-wrapper">
            <select id="hook-scalability" name="scalability" class="input-context__input input-context__input--select">
              <option>нет (локально)</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-author" class="input-context__label">Автор</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-author" name="author" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-created-at" class="input-context__label">Дата создания</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-created-at" name="created_at" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-country" class="input-context__label">Страна</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-country" name="country" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-posts-number" class="input-context__label">Количество постов</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-posts-number" name="posts_number" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-rating" class="input-context__label">Рейтинг (голосование)</label>
            <p class="input-context__description">(также: рейтинг по Linkedin skills)</p>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-rating" name="rating" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-tags" class="input-context__label">Тэги #</label>
          </div>

          <div class="input-context__input-wrapper">
            <input id="hook-tags" name="tags" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>
      </form>
    </div>

    <div class="idea-search__results">
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
</div>
