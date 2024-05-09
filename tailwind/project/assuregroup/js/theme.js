

document.addEventListener( 'DOMContentLoaded', function () {
	
	var splide = new Splide( '#first-slider', {
		type : 'loop',
		perPage: 1,
		pagination: false,
		breakpoints: {
			640: {
				perPage: 1,
				height : '100vh',
			},
			480: {
				perPage: 1,
				height : '100vh',
			},
		},
	}).mount();
	
	var main = new Splide( '#main-carousel', {
		type      			: 'loop',
		rewind    			: true,
		autoplay			: true,
		pagination		: false,
		arrows    			: false,
	} );

	var thumbnails = new Splide( '#thumbnail-carousel', {
		autoWidth: true,
		fixedWidth  			: 100,
		fixedHeight 			: 160,
		//autoplay: true,
		gap         				: 20,
		rewind     			: true,
		pagination  			: false,
		isNavigation		: true,
		arrows          		: false,
		focus     				: 'center',
		breakpoints : {
			600: {
				fixedWidth : 60,
				fixedHeight: 160,
			},
		},
	} );

	main.sync( thumbnails );
	main.mount(); 
	thumbnails.mount();
} );
