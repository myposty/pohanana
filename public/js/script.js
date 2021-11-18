/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
(function ($) {
  "use strict"; // jQuery for page scrolling feature - requires jQuery Easing plugin

  $(function () {
    $(document).on('click', 'a.page-scroll', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 600, 'easeInOutExpo');
      event.preventDefault();
    });
  });
})(jQuery);
/******/ })()
;