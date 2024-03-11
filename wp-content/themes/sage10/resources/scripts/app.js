import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap/js/dist/collapse.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  const toggleMenu = document.querySelector('.toggle-menu');
  const sidebarPanel = document.querySelector('.sidebar-panel');
  const closeMenu = document.querySelector('.sidebar-panel__close');
  const offBackdrop = document.querySelector('.off-backdrop');
  const body = document.body;
  toggleMenu.addEventListener('click', function (e) {
    e.preventDefault();
    body.classList.add('overflow-hidden');
    offBackdrop.classList.add('active');
    sidebarPanel.classList.add('active');
  });
  closeMenu.addEventListener('click', function () {
    body.classList.remove('overflow-hidden');
    offBackdrop.classList.remove('active');
    sidebarPanel.classList.remove('active');
  });
  offBackdrop.addEventListener('click', function () {
    body.classList.remove('overflow-hidden');
    offBackdrop.classList.remove('active');
    sidebarPanel.classList.remove('active');
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
