<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-project-submit.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/project-submit-form.js"></script>

<div class="project-submit">
  <div class="project-submit__got-idea">
    <img src="<?php bloginfo('template_directory'); ?>/assets/got-idea.png" />
    <h1 class="project-submit__got-idea-header">Есть идея!</h1>
  </div>

  <div class="project-submit-form-switch">
    <button
      class="project-submit-form-switch__button project-submit-form-switch__button--active"
      data-target="js-form-conversation">
      Форма для общения
    </button>

    <button
      class="project-submit-form-switch__button"
      data-target="js-form-investment">
      Форма для инвестора
    </button>
  </div>

  <div class="project-submit__form-wrapper">
    <div class="project-submit__form project-submit__form--active js-form-conversation">
      <form class="input-context input-context--theme-basic">
        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-search-type" class="input-context__label">
              Поиск проекта
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <select
              id="hook-search-type"
              name="search_type"
              class="input-context__input input-context__input--select">
              <option>По популярности</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-direction" class="input-context__label">Направление</label>
          </div>

          <div class="input-context__input-wrapper">
            <select
              id="hook-direction"
              name="direction"
              class="input-context__input input-context__input--select">
              <option><?php echo __('Альтернативная энергетика', 'hv-serikoff'); ?></option>
							<option><?php echo __('Борьба с бедностью', 'hv-serikoff'); ?></option>
							<option><?php echo __('Космос', 'hv-serikoff'); ?></option>
							<option><?php echo __('Медицина', 'hv-serikoff'); ?></option>
							<option><?php echo __('Образование', 'hv-serikoff'); ?></option>
							<option><?php echo __('Экология', 'hv-serikoff'); ?></option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-is-commercial" class="input-context__label">
              Коммерческая идея
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <select
              id="hook-is-commercial"
              name="is_commercial"
              class="input-context__input input-context__input--select">
              <option>Да</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-cost" class="input-context__label">
              Сумма для реализации, USD
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-cost"
              name="cost"
              type="text"
              class="input-context__input input-context__input--text"
            />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-deadline" class="input-context__label">
              Срок реализации
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <select
              id="hook-deadline"
              name="deadline"
              class="input-context__input input-context__input--select">
              <option>&lt 1 года</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-scalability" class="input-context__label">
              Масштабируемость
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <select
              id="hook-scalability"
              name="scalability"
              class="input-context__input input-context__input--select">
              <option>нет (локально)</option>
            </select>
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-author" class="input-context__label">Автор</label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-author"
              name="author"
              type="text"
              class="input-context__input input-context__input--text"
            />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-created-at" class="input-context__label">
              Дата создания
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-created-at"
              name="created_at"
              type="text"
              class="input-context__input input-context__input--text"
            />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-country" class="input-context__label">Страна</label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-country"
              name="country"
              type="text"
              class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-posts-number" class="input-context__label">
              Количество постов
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-posts-number"
              name="posts_number"
              type="text"
              class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-rating" class="input-context__label">
              Рейтинг (голосование)
            </label>
            <p class="input-context__description">(также: рейтинг по Linkedin skills)</p>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-rating"
              name="rating"
              type="text"
              class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row">
          <div class="input-context__label-wrapper">
            <label for="hook-tags" class="input-context__label">Тэги #</label>
          </div>

          <div class="input-context__input-wrapper">
            <input
              id="hook-tags"
              name="tags"
              type="text"
              class="input-context__input input-context__input--text" />
          </div>
        </div>

        <div class="input-context__row input-context__row--center">
          <input
            type="submit"
            value="Зарегистрировать идею"
            class="input-context__input input-context__input--submit"
          />
        </div>
      </form>
    </div>

    <div class="project-submit__form js-form-investment">
      <form class="input-context input-context--theme-basic">
        <fieldset class="input-context__fieldset input-context__fieldset--margin">
          <legend
            class="input-context__legend">
            <img
              class="input-context--theme-basic__general-image"
              src="<?php bloginfo('template_directory'); ?>/assets/submit-general.png" />
            Общие данные
          </legend>

          <div class="input-context__row">
            <div class="input-context__label-wrapper">
              <label for="hook-inv-project-name" class="input-context__label">Название проекта</label>
            </div>

            <div class="input-context__input-wrapper">
              <textarea
                id="hook-inv-project-name"
                name="project_name"
                class="input-context__input input-context__input--textarea">
              </textarea>
            </div>
          </div>

          <div class="input-context__row">
            <div class="input-context__label-wrapper">
              <label for="hook-inv-problems" class="input-context__label">
                Проблемы рынка, решаемые инновацией
              </label>
            </div>

            <div class="input-context__input-wrapper">
              <textarea
                id="hook-inv-problems"
                name="problems"
                class="input-context__input input-context__input--textarea">
              </textarea>
            </div>
          </div>

          <div class="input-context__row">
            <div class="input-context__label-wrapper">
              <label for="hook-inv-monetization" class="input-context__label">
                Механизм монетизации
              </label>
            </div>

            <div class="input-context__input-wrapper">
              <textarea
                id="hook-inv-monetization"
                name="monetization"
                class="input-context__input input-context__input--textarea">
              </textarea>
            </div>
          </div>

          <div class="input-context__row">
            <div class="input-context__label-wrapper">
              <label for="hook-inv-short-description" class="input-context__label">
                Суть инновации
              </label>
            </div>

            <div class="input-context__input-wrapper">
              <textarea
                id="hook-inv-short-description"
                name="short_description"
                class="input-context__input input-context__input--textarea">
              </textarea>
            </div>
          </div>
        </fieldset>

        <fieldset class="input-context__fieldset input-context__fieldset--margin">
          <legend class="input-context__legend">
            <img src="<?php bloginfo('template_directory'); ?>/assets/submit-protection.png" />
            Защищаемость
          </legend>

          <div class="input-context__row">
            <div class="input-context__label-wrapper">
              <label for="hook-inv-expertise" class="input-context__label">
                Есть ли техническое обоснование / экспертиза разработки
              </label>
            </div>

            <div class="input-context__input-wrapper">
              <textarea
                id="hook-inv-expertise"
                name="expertise"
                class="input-context__input input-context__input--textarea">
              </textarea>
            </div>
          </div>
        </fieldset>

        <div class="input-context__row input-context__row--center">
          <input
            type="submit"
            value="Зарегистрировать идею"
            class="input-context__input input-context__input--submit"
          />
      </form>
    </div>
  </div
</div>
