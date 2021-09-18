"use strict";

jQuery(function ($) {
  $(".hamburger, .overlay").click(function () {
    $("body").toggleClass("menu-show");
  });
  ScrollReveal().reveal(".row > *", {
    reset: true
  });

  window.onscroll = function () {
    setSticky();
  }; // Get the header


  var header = document.getElementById("header"); // Get the offset position of the navbar

  var sticky = header.offsetTop; // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position

  function setSticky() {
    if (window.pageYOffset > 500 && window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
});