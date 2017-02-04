<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page-investor.css" />

<div class="investor-page">
  <div class="investor-page__form">
    <form class="input-context input-context--theme-basic">
      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Общие данные</legend>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-project-name" class="input-context__label">Название проекта</label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-project-name"
              name="project_name"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-problems" class="input-context__label">
              Проблемы рынка, решаемые инновацией
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-problems"
              name="problems"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-monetization" class="input-context__label">
              Механизм монетизации
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-monetization"
              name="monetization"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-short-description" class="input-context__label">
              Суть инновации
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-short-description"
              name="short_description"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Защищаемость</legend>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-expertise" class="input-context__label">
              Есть ли техническое обоснование / экспертиза разработки
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-expertise"
              name="expertise"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-other-security-forms" class="input-context__label">
              Другие возможные формы защиты идеи
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-other-security-forms"
              name="other_security_forms"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Технология</legend>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-newness" class="input-context__label">
              Обоснование новизны технологии (на региональном/мировом уровне)
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-newness"
              name="newness"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-is-already-patented" class="input-context__label">
              Проверьте, не запатентована ли ваша идея/инновация на сайте
              <a href="http://google.com/patents">www.google.com/patents</a>
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-is-already-patented"
              name="is_already_patented"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-related-posts" class="input-context__label">
              Перечислите публикации в информационных источниках по теме, связанной с проектом
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-related-posts"
              name="related_posts"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Продукты и рынки</legend>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-target-audience" class="input-context__label">
              Целевая аудитория проекта
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-target-audience"
              name="target_audience"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-foreign-analogues" class="input-context__label">
              Зарубежные аналоги
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-foreign-analogues"
              name="foreign_analogues"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-competitors" class="input-context__label">
              Конкуренты на целевом рынке
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-competitors"
              name="competitors"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-barriers" class="input-context__label">
              Барьеры входа на рынок
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-barriers"
              name="barriers"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-implementation-period" class="input-context__label">
              Срок реализации проекта
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-implementation-period"
              name="implementation_period"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Команда</legend>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-team-resume" class="input-context__label">
              Краткое резюме участников с указанием обязанностей в проекте
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-team-resume"
              name="team_resume"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-team-achievements" class="input-context__label">
              Краткая характеристика достижений участников команды
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-team-achievements"
              name="team_achievements"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>
      </fieldset>

      <fieldset class="input-context__fieldset input-context__fieldset--margin">
        <legend class="input-context__legend">Экономика и условия</legend>

        <div class="input-context__row">
          <p class="input-context__fieldset-description">
            Укажите уже имеющуюся интеллектуальную собственность и достижения проекта
          </p>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-patent" class="input-context__label">
              Патент
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-patent"
              name="patent"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-misc-intellectual-property" class="input-context__label">
              Другая интеллектуальная собственность
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-misc-intellectual-property"
              name="misc_intellectual_property"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-project-status" class="input-context__label">
              Статус проекта
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-project-status"
              name="project_status"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-key-steps" class="input-context__label">
              Ключевые этапы и примерная стоимость их реализации
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-key-steps"
              name="key_steps"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-current-cost-estimate" class="input-context__label">
              Оценка стоимости проекта на текущем этапе
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-current-cost-estimate"
              name="current_cost_estimate"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-investment-amount-estimate" class="input-context__label">
              Предполагаемая сумма инвестиций
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-investment-amount-estimate"
              name="investment_amount_estimate"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-investor-share" class="input-context__label">
              Предполагаемая доля инвестора
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-investor-share"
              name="investor_share"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row">
          <p class="input-context__fieldset-description">
            Степень готовности проектной документации в %
          </p>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-investment-offer" class="input-context__label">
              Инвестиционное предложение
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-investment-offer"
              name="investment_offer"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-presentation" class="input-context__label">
              Презентация инвестору
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-presentation"
              name="presentation"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-business-plan" class="input-context__label">
              Бизнес-план
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-business-plan"
              name="business_plan"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-tech-spec" class="input-context__label">
              Техническая спецификация
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-tech-spec"
              name="tech_spec"
              class="input-context__input input-context__input--textarea"></textarea>
          </div>
        </div>

        <div class="input-context__row input-context__row--align-center">
          <div class="input-context__label-wrapper">
            <label for="hook-inv-patent-texts" class="input-context__label">
              Тексты патентов
            </label>
          </div>

          <div class="input-context__input-wrapper">
            <textarea
              id="hook-inv-patent-texts"
              name="patent_texts"
              class="input-context__input input-context__input--textarea"></textarea>
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
</div>
