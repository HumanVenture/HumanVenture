function _onGridLayoutSwitchItemClick() {
  var modifier = this.getAttribute('data-modifier');
  var target = document.querySelector('.' + this.getAttribute('data-target'));

  if (target) {
    if (this.getAttribute('data-action') == '-') {
      target.classList.remove(modifier);
    } else {
      target.classList.add(modifier);
    }
  }
}

document.addEventListener('DOMContentLoaded', function(_) {
  var switchButtons = document.querySelectorAll('.grid-layout-switch__item');

  for(var i = 0; i < switchButtons.length; i++) {
    switchButtons[i].addEventListener('click', _onGridLayoutSwitchItemClick);
  }
});
