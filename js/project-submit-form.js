function _switchModifiers(modifierClassName, targetElement) {
  if (currentElement = document.querySelector('.' + modifierClassName)) {
    currentElement.classList.remove(modifierClassName);
  }
  targetElement.classList.add(modifierClassName);
}

function _onSwitchButtonClick() {
  // switch active form
  _switchModifiers(
    'project-submit__form--active',
    document.querySelector('.' + this.getAttribute('data-target'))
  );

  // switch active button
  _switchModifiers(
    'project-submit-form-switch__button--active',
    this
  );
}

document.addEventListener('DOMContentLoaded', function(_) {
  var switchButtons = document.querySelectorAll('.project-submit-form-switch__button');

  for(var i = 0; i < switchButtons.length; i++) {
    switchButtons[i].addEventListener('click', _onSwitchButtonClick);
  }
});
