const toggleMenu = document.querySelector('#toggle-menu');
const menu = document.querySelector('.main-menus');


toggleMenu.addEventListener('click', function() {
  console.log('coyucou');
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});