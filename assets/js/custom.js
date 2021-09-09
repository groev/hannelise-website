"use strict";

jQuery(function ($) {
  $(".hamburger, .overlay").click(function () {
    $('body').toggleClass("menu-show");
  });
});