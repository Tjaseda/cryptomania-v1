class MobileMenu {
  constructor() {
    this.burgerIcon = document.getElementsByClassName('toggle-nav')[0];
    this.menu = document.getElementsByClassName('js-main-nav')[0];
    this.events();
  }

  events() {
    this.burgerIcon.addEventListener('click', this.toggleMenu.bind(this));
  }

  toggleMenu(e) {
    e.preventDefault();
    this.menu.classList.toggle('js-main-nav--is-visible');
    this.burgerIcon.classList.toggle('toggle-nav--close-x');
  }
}

export default MobileMenu;
