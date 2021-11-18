/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var body = document.body;
var header = document.querySelector("header");
var main = document.querySelector("main");
var headerHeight = document.querySelector("header").offsetHeight;
main.style.top = headerHeight + "px";
var lastScroll = 0;
window.addEventListener("scroll", function () {
  var currentScroll = window.pageYOffset; // console.log("current: ", currentScroll);
  // console.log("last: ", lastScroll);

  if (currentScroll - lastScroll > 0) {
    // scrolled down -- header hide
    header.classList.add("scroll-down");
    header.classList.remove("scroll-up");
  } else {
    // scrolled up -- header show
    header.classList.add("scroll-up");
    header.classList.remove("scroll-down");
  }

  lastScroll = currentScroll; // console.log("last: ", lastScroll);
}); // convert to webp
/******/ })()
;