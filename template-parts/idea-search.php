<style>
  .idea-button__button {
    background-image: url('<?php bloginfo('template_directory'); ?>/assets/idea-button.png');
  }
</style>

<div class="idea-search">
  <div class="idea-button">
    <button class="idea-button__button">Есть идея!</button>
  </div>

  <div class="idea-search__container">
    <div class="idea-search__search">
      <form class="input-context input-context--theme-basic">
        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="search_type" class="input-context__label">Поиск проекта</label>
          </div>

          <div class="input-context__input-wrapper">
            <select name="search_type" class="input-context__input input-context__input--select">
              <option>По популярности</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="direction" class="input-context__label">Направление</label>
          </div>

          <div class="input-context__input-wrapper">
            <select name="direction" class="input-context__input input-context__input--select">
              <option>Энергетика</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="is_commercial" class="input-context__label">Коммерческая идея</label>
          </div>

          <div class="input-context__input-wrapper">
            <select name="is_commercial" class="input-context__input input-context__input--select">
              <option>Да</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="cost" class="input-context__label">Сумма для реализации, USD</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="cost" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="deadline" class="input-context__label">Срок реализации</label>
          </div>

          <div class="input-context__input-wrapper">
            <select name="deadline" class="input-context__input input-context__input--select">
              <option>&lt 1 года</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="scalability" class="input-context__label">Масштабируемость</label>
          </div>

          <div class="input-context__input-wrapper">
            <select name="scalability" class="input-context__input input-context__input--select">
              <option>нет (локально)</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="author" class="input-context__label">Автор</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="author" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="created_at" class="input-context__label">Дата создания</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="created_at" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="country" class="input-context__label">Страна</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="country" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="posts_number" class="input-context__label">Количество постов</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="posts_number" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="rating" class="input-context__label">Рейтинг (голосование)</label>
            <p class="input-context__description">(также: рейтинг по Linkedin skills)</p>
          </div>

          <div class="input-context__input-wrapper">
            <input name="rating" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label name="tags" class="input-context__label">Тэги #</label>
          </div>

          <div class="input-context__input-wrapper">
            <input name="tags" type="text" class="input-context__input input-context__input--text" />
          </div>
        </div>
      </form>
    </div>

    <div class="idea-search__results">
    </div>
  </div>
</div>
