window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');
$(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false
    });
});
