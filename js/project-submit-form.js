function _onSwitchButtonClick() {
  var targetClassName = 'project-submit__form--active';

  if (currentActiveForm = document.querySelector('.' + targetClassName)) {
    currentActiveForm.classList.remove(targetClassName);
  }

  var newActiveForm = document.querySelector('.' + this.getAttribute('data-target'));
  newActiveForm.classList.add(targetClassName);
}

document.addEventListener('DOMContentLoaded', function(_) {
  var switchButtons = document.querySelectorAll('.project-submit-form-switch__button');

  for(var i = 0; i < switchButtons.length; i++) {
    var item = switchButtons[i];

    item.addEventListener('click', _onSwitchButtonClick);
  }
});
