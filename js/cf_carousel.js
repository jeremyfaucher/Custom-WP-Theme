/**
 * cf-slider.js
 *
 * Handles the Cafe Faucher Slider
 */

// Fade Carousel
$(document).ready(function() {

  var slideqty = $('#fade-quote-carousel .item').length;
  //var randSlide = Math.floor(Math.random()*slideqty);

  $('#fade-quote-carousel .item').eq(0).addClass('active');

  for (var i=0; i < slideqty; i++) {
    var insertText = '<li data-target="#fade-quote-carousel" data-slide-to="' + i + '"></li>';
    $('#fade-quote-carousel ol').append(insertText);
  }

  $('.carousel').carousel({
         interval: 6000, //changes the speed
         pause: "false"
       });

});

