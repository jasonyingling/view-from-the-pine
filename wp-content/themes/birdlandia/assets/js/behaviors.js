$(document).ready(main);

/*
var searchBtn = $('#searchsubmit').attr('type');
console.log(searchBtn);

	$('input#searchsubmit').addClass('btn');
*/

function main (event) {

	$('.navbar .dropdown a').addClass('dropdown-toggle');
	$('.navbar .dropdown a').append('<b class="caret"></b>');
	$('.navbar .dropdown a').attr('data-toggle', 'dropdown');
	$('.navbar .dropdown-menu a').attr('data-toggle', '');
	$('.navbar .dropdown-menu a b').remove('b');
	
	$('.btn').popover('toggle');
	$('.btn').popover('hide');
	
	// Check screen size and adjust twitter widget accordingly
	var windowWidth = $(window).width();
	console.log(windowWidth);
	var screenSize = windowWidth - 60 + 'px';
	console.log(screenSize);
	
	if ( $(window).width() < 1200 && $(window).width() > 979 ) {
    	console.log('Less than 1200');
    	$('a.twitter-timeline').attr('width', '280px');
	}
	else if ($(window).width() < 979 && $(window).width() > 768) {
	  	 console.log('Less than 979');
	  	 $('a.twitter-timeline').attr('width', '208px');
	} 
	else if ($(window).width() < 768) {
		$('a.twitter-timeline').attr('width', ''+windowWidth - 60 + 'px' );
	} 
	else {
		console.log('More than 1200');
		$('a.twitter-timeline').attr('width', '350px');
	}

}


