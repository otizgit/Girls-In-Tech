const dropDown = document.querySelector(".drop-down");
const drop = document.querySelector(".drop");
const dropLinks = document.querySelectorAll(".drop li");
const lists = document.querySelectorAll(".lists");
const nav = document.querySelector("nav");
const header = document.querySelector("header");
const hamburger = document.querySelector(".hamburger");

dropDown.addEventListener("click", function () {
  drop.classList.toggle("display-drop-down");
  dropLinks.forEach(function (dropLink) {
    dropLink.classList.toggle("drop-links-animation");
  });
});

nav.style.top = header.getBoundingClientRect().height + "px";

hamburger.addEventListener("click", function () {
  nav.classList.toggle("display-nav");
  hamburger.classList.toggle("switch");
  lists.forEach(function (list) {
    list.classList.toggle("drop-links-animation");
  });
});
