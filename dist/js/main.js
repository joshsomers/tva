$(function () {
	'use strict';

	var $window = $(window);
	var $this = $(this);
	var body = $('body');

	$('#hero-slider').flickity({
		cellSelector: '.slide',
		wrapAround: true,
		pageDots: false,
		autoPlay: 4000
	});

	$('.review-slider').flickity({
		cellSelector: '.review-item',
		wrapAround: true,
		pageDots: false,
		prevNextButtons: false,
		autoPlay: 4000
	});

	$('.grid').masonry({
		// options
		itemSelector: '.grid-item',
	});


});