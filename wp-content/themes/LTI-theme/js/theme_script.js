$(document).ready(function () {
	

	/*
	 * Sticky header on scroll
	 */

	const selectHeader = document.querySelector('#header');
	if (selectHeader) {
		document.addEventListener('scroll', () => {
			window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
		});
	}



	// Banner Slider
	var mySwiper = new Swiper('.swiper-container', {
		direction: 'horizontal',
		loop: true,
		centeredSlides: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			// dynamicBullets: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// Autoplay
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		speed: 2000,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
	});



	// // Read More
	$('.expander').expander({
		slicePoint: 500,
		widow: 2,
		expandSpeed: 0,
		// userCollapseText: '[^]'
	});

	$('.expander').expander();
	
	// Get all elements with the class 'link'
	$('a.more-link').click(function (e) {
		e.stopPropagation();
		console.log("more link")
	});
	$('a.less-link').click(function (e) {
		e.stopPropagation();
		console.log("less link")
	});

	var links = document.querySelectorAll('.more-link');

	// Update href attribute for each link
	links.forEach(function (link) {
		link.href = "javascript:void(0);";
	});


	// Upgrade slider
	var mySwiper2 = new Swiper('.swiper-upgrade', {
		direction: 'horizontal', // or 'vertical'
		loop: true,
		speed: 1000,
		allowTouchMove: true,
		slidesPerView: 1.4,

		autoplay: true,		
		spaceBetween: 20,
		// allowSlidePrev: false,
		breakpoints: {
			1920: {
				slidesPerView: 3.2,
				spaceBetween: 30
			},
			1028: {
				slidesPerView: 3.2,
				spaceBetween: 30
			},
			767: {
				slidesPerView: 2.2,
				spaceBetween: 30
			},
			667: {
				slidesPerView: 1.4,
				spaceBetween: 0
			},
			480: {
				slidesPerView: 1.4,
				spaceBetween:20
			}
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			// dynamicBullets: true,
		},
	});

	
});
