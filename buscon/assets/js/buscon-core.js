/*

Template Name:  example
Description:  example
Author: themexriver
Version: 1.0

====javascript indexing======

preloader


*/

(function ($) {
	"use strict";

	// mobile menu
	if ($(".mobile-main-navigation li.dropdown ul").length) {
		$(".mobile-main-navigation li.dropdown").append(
			'<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>'
		);
		$(".mobile-main-navigation li.dropdown .dropdown-btn").on(
			"click",
			function () {
				$(this).prev("ul").slideToggle(500);
			}
		);
	}
	$(".dropdown-btn").on("click", function () {
		$(this).toggleClass("toggle-open");
	});

	// search-popup

	$(".search_btn_toggle").on("click", function () {
		$(".overlay, .search_1_popup_active").addClass("active");
	});
	$(".overlay, .search_1_popup_close").on("click", function () {
		$(".search_1_popup_active").removeClass("active");
		$(".overlay").removeClass("active");
	});

	// gsap-animation-start

	gsap.registerPlugin(ScrollTrigger);

	var menuToggle = document.getElementById("menuToggle");
	var menuToggle2 = document.getElementById("menuToggle2");

	var menuBar = gsap.timeline();

	menuBar.to(
		".chy-menu-btn-1 ",
		0.5,
		{
			background: "#6F9EDE",
		},
		"start"
	);

	menuBar.reverse();

	var menubgline = gsap.timeline({ paused: true });

	menubgline.to(".fullpage-menu", {
		duration: 0,
		display: "block",
		ease: "Expo.easeInOut",
	});
	menubgline.to(".menu-bg span", {
		duration: 0.5,
		width: "100%",
		stagger: 0.1,
		ease: "Expo.easeInOut",
	});
	menubgline.to(".menu-logo", {
		x: 0,
		opacity: 1,
		ease: "Expo.easeInOut",
	});
	menubgline.to(".mobile-main-navigation , .mobile-search-bar", {
		opacity: 1,
		y: 0,
		ease: "Expo.easeInOut",
	});
	menubgline.to(
		".fullpage-menu-close",
		{
			duration: 0,
			x: 0,
			rotate: 0,
			opacity: 1,
			ease: "Expo.easeInOut",
		},
		"<"
	);

	menubgline.to(".fullpage-menu-gellary .item", {
		duration: 0,
		opacity: 1,
		stagger: 0.1,
		ease: "Expo.easeInOut",
	});

	menubgline.to(".full-page-socail-link li", {
		opacity: 1,
		y: 1,
		stagger: 0.1,
		ease: "Expo.easeInOut",
	});

	menubgline.reverse();

	menuToggle.addEventListener("click", function () {
		// menuBar.reversed(!menuBar.reversed());
		menubgline.reversed(!menubgline.reversed());
	});

	menuToggle2.addEventListener("click", function () {
		// menuBar.reversed(!menuBar.reversed());
		menubgline.reversed(!menubgline.reversed());
	});

	gsap.utils.toArray(".txa-img-zoomout").forEach((el, index) => {
		let tl1 = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 70%",
				end: "top 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		tl1.set(el, { transformOrigin: "center center" }).from(
			el,
			{ scale: 1.5 },
			{ scale: 1, duration: 1, immediateRender: false }
		);
	});

	gsap.utils.toArray(" .txa-slide-inright").forEach((el, index) => {
		let tl2 = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 3,
				start: "top 80%",
				end: "top 70%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		tl2.set(el, { transformOrigin: "center center" }).from(
			el,
			{ x: "+=500" },
			{ x: 0, duration: 1, immediateRender: false }
		);
	});

	gsap.utils.toArray(" .asslideupcta").forEach((el, index) => {
		let tlcta = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 80%",
				end: "top 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		tlcta
			.set(el, { transformOrigin: "center center" })
			.from(
				el,
				{ opacity: 1, y: "+=300" },
				{ opacity: 1, y: 0, duration: 1, immediateRender: false }
			);
	});

	gsap.utils.toArray(".animate-image").forEach((el, index) => {
		let tl3 = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				start: "top 90%",
				end: "buttom 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		tl3.set(el, { transformOrigin: "center center" }).from(
			el,
			{ opacity: 0, scale: 0.8, y: "+=100" },
			{ opacity: 1, scale: 1, y: 0, duration: 1, immediateRender: false }
		);
	});

	gsap.utils.toArray(".section-bg-title").forEach((el, index) => {
		let txabgtitle = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 80%",
				end: "buttom 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		txabgtitle
			.set(el, { transformOrigin: "center center" })
			.from(
				el,
				{ color: "#5956F0", opacity: 1, x: "-=100" },
				{
					color: "transparent",
					opacity: 0.1,
					x: 0,
					duration: 1,
					immediateRender: false,
				}
			);
	});

	gsap.utils.toArray(".txa-bg-change").forEach((el, index) => {
		let txabgchange = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 70%",
				end: "buttom 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		txabgchange
			.set(el, { transformOrigin: "center center" })
			.from(
				el,
				{ backgroundColor: "#fff" },
				{ BackgroundColor: "#060D37", immediateRender: false }
			);
	});

	gsap.utils.toArray(".asa3bg").forEach((el, index) => {
		let vasa3bg = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				start: "top 90%",
				end: "buttom 40%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vasa3bg
			.set(el, { transformOrigin: "center center" })
			.from(
				el,
				{ opacity: 1, scale: 0.2, y: "+=100" },
				{
					opacity: 1,
					scale: 1,
					y: 0,
					duration: 1,
					immediateRender: false,
				}
			);
	});

	gsap.utils.toArray(".ass3bgsl").forEach((el, index) => {
		let vass3bgsl = gsap
			.timeline({
				scrollTrigger: {
					trigger: el,
					scrub: 1,
					start: "top 95%",
					end: "top 70%",
					toggleActions: "play none none reverse",
					markers: false,
				},
			})

			.fromTo(
				el,
				{
					x: -200,
					duration: 1,
				},
				{
					x: 0,
				}
			);
	});

	gsap.utils.toArray(".ass3bgsr").forEach((el, index) => {
		let vass3bgsr = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 95%",
				end: "top 70%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vass3bgsr.fromTo(
			el,
			{
				x: 200,
				duration: 1,
			},
			{
				x: 0,
			}
		);
	});

	gsap.utils.toArray(".ass3vrd").forEach((el, index) => {
		let vass3vrd = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 95%",
				end: "top 5%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vass3vrd.to(el, {
			rotateZ: 360,
			duration: 3,
		});
	});

	gsap.utils.toArray(".ast3vrd").forEach((el, index) => {
		let vast3vrd = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				// scrub: 1,
				start: "top 95%",
				end: "top 5%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vast3vrd.fromTo(
			el,
			{
				rotateZ: 90,
				duration: 2,
			},
			{
				rotateZ: 0,
			}
		);
	});

	gsap.utils.toArray(".ascta3y").forEach((el, index) => {
		let vascta3y = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 95%",
				end: "top 5%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vascta3y.fromTo(
			el,
			{
				y: 150,
				duration: 2,
			},
			{
				y: 0,
			}
		);
	});

	gsap.utils.toArray(".ascta3y").forEach((el, index) => {
		let vascta3y = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 95%",
				end: "top 5%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vascta3y.fromTo(
			el,
			{
				y: 150,
				duration: 2,
			},
			{
				y: 0,
			}
		);
	});

	gsap.utils.toArray(".news5-img").forEach((el, index) => {
		let vascta3y = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				// scrub: 1,
				start: "top 90%",
				end: "top 50%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		vascta3y.fromTo(
			el,
			{
				yPercent: 100,
				duration: 1,
				ease: "power2.out",
			},
			{
				yPercent: 0,
				ease: "power2.out",
				duration: 1,
			}
		);
	});

	gsap.utils.toArray(".va4bgimg").forEach((el, index) => {
		let va4bgimg = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				scrub: 1,
				start: "top 95%",
				end: "top 5%",
				toggleActions: "play none none reverse",
				markers: false,
			},
		});

		va4bgimg.fromTo(
			el,
			{
				rotateZ: 360,
				duration: 2,
			},
			{
				rotateZ: 0,
			}
		);
	});

	if (screen.width < 1199) {
	}

	gsap.utils.toArray(".txaslideup").forEach((el, index) => {
		let vass3vrd = gsap.timeline({
			scrollTrigger: {
				trigger: el,
				start: "top 95%",
				end: "top 10%",
				toggleActions: "play reverse play reverse",
				markers: false,
			},
		});

		vass3vrd.from(el, {
			yPercent: 100,
			duration: 0.5,
		});
	});

	var txat3g = gsap.timeline({
		scrollTrigger: {
			animation: txat3g,
			trigger: ".txa-testimonial-3-area",
			start: "top 90%",
			end: "top 40%",
			scrub: 3,
			toggleActions: "play reverse play reverse",
			markers: false,
		},
	});

	txat3g
		.from(".txa-testimonial-3-img .img-item-1", {
			xPercent: -50,
			YPercent: -50,
			opacity: 0,
			duration: 0.5,
		})
		.from(
			".txa-testimonial-3-img .img-item-2",
			{ xPercent: 50, YPercent: -50, opacity: 0, duration: 0.5 },
			"<"
		)
		.from(
			".txa-testimonial-3-img .img-item-3",
			{ xPercent: -50, YPercent: 50, opacity: 0, duration: 0.5 },
			"<"
		)
		.from(
			".txa-testimonial-3-img .img-item-4",
			{ xPercent: 50, YPercent: -50, opacity: 0, duration: 0.5 },
			"<"
		);

	var txacta3 = gsap.timeline({
		scrollTrigger: {
			animation: txacta3,
			trigger: ".txa-cta-3-area",
			start: "top 90%",
			end: "top 50%",
			scrub: 1,
			toggleActions: "play reverse play reverse",
			markers: false,
		},
	});

	txacta3.from(".txa-cta-3-wrap .main-img img", { scale: 2, duration: 0.5 });
	txacta3.from(".txa-cta-3-area", { yPercent: "+=20", duration: 0.5 }, "<");
	txacta3.from(".txa-cta-3-wrap .btn-wrap", {
		yPercent: "+=20",
		opacity: 0,
		duration: 1,
	});

	if ($(window).width() > 991) {
		var txact3 = gsap.timeline({
			scrollTrigger: {
				animation: txact3,
				trigger: ".txa-team-3-area",
				start: "top 80%",
				end: "top -70%",
				toggleActions: "play reverse play reverse",
				markers: false,
			},
		});
		txact3.from(".txa-team-3-member-ani", {
			yPercent: 100,
			stagger: 0.3,
			duration: 0.5,
		});
	}

	var txaa3 = gsap.timeline({
		scrollTrigger: {
			animation: txaa3,
			trigger: ".txa-about-3-img",
			start: "top 80%",
			end: "top 40%",
			scrub: 3,
			toggleActions: "play reverse play reverse",
			markers: false,
		},
	});

	txaa3
		.from(".txa-about-3-img svg", { rotateZ: 260, duration: 0.5 })
		.from(".txa-about-3-img .main-img img ", {
			rotateZ: 90,
			scale: 1.5,
			duration: 0.5,
		});

	// gsap-animation-end

	// gsap-title-animation-start

	window.onload = function () {
		var st = $(".txa-split-text");
		if (st.length == 0) return;
		gsap.registerPlugin(SplitText);
		st.each(function (index, el) {
			el.split = new SplitText(el, {
				type: "lines,words,chars",
				linesClass: "split-line",
			});
			gsap.set(el, { perspective: 400 });

			if ($(el).hasClass("split-in-fade")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					ease: "Back.easeOut",
				});
			}
			if ($(el).hasClass("txa-split-in-right")) {
				gsap.set(el.split.chars, {
					opacity: 1,
					webkitTextStroke: "2px white",
					color: "transparent",
					x: "50",
					ease: "Back.easeOut",
				});
			}
			if ($(el).hasClass("txa-split-in-right-black")) {
				gsap.set(el.split.chars, {
					opacity: 1,
					webkitTextStroke: "2px black",
					color: "transparent",
					x: "50",
					ease: "Back.easeOut",
				});
			}
			if ($(el).hasClass("txa-split-in-right-3")) {
				gsap.set(el.split.chars, {
					opacity: 1,
					webkitTextStroke: "1px black",
					color: "transparent",
					x: "50",
					ease: "Back.easeOut",
				});
			}
			if ($(el).hasClass("split-in-left")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					x: "-50",
					ease: "circ.out",
				});
			}
			if ($(el).hasClass("split-in-up")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					y: "80",
					ease: "circ.out",
				});
			}
			if ($(el).hasClass("split-in-down")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					y: "-80",
					ease: "circ.out",
				});
			}
			if ($(el).hasClass("split-in-rotate")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					rotateX: "50deg",
					ease: "circ.out",
				});
			}
			if ($(el).hasClass("split-in-scale")) {
				gsap.set(el.split.chars, {
					opacity: 0,
					scale: "0.5",
					ease: "circ.out",
				});
			}
			el.anim = gsap.to(el.split.chars, {
				scrollTrigger: {
					trigger: el,
					// toggleActions: "restart pause resume reverse",
					start: "top 90%",
				},
				x: "0",
				y: "0",
				rotateX: "0",
				color: "inherit",
				webkitTextStroke: "0px white",
				scale: 1,
				opacity: 1,
				duration: 0.8,
				stagger: 0.02,
			});
		});
	};

	// gsap-add-class-start

	const txaaddclass = gsap.utils.toArray(".txa-class-add");
	txaaddclass.forEach((img) => {
		gsap.to(img, {
			scrollTrigger: {
				trigger: img,
				scrub: 1,
				start: "top 80%",
				end: "bottom bottom",
				toggleClass: "active",
				toggleActions: "play none none reverse",
				once: true,
			},
		});
	});

	// gsap-add-class-end

	// gsap-title-animation-end

	// home-1-shape-moveing-start

	gsap.set(".animation-shape", { xPercent: -50, yPercent: -50 });

	let xSetter = gsap.quickSetter(".animation-shape", "x", "px"); //apply it to the #id element's x property and append a "px" unit
	let ySetter = gsap.quickSetter(".animation-shape", "y", "px"); //apply it to the #id element's x property and append a "px" unit

	window.addEventListener("mousemove", (e) => {
		xSetter(e.x);
		ySetter(e.y);
	});

	// home-1-shape-moveing-end

	/*
	hero-3-start
*/

	document.addEventListener("DOMContentLoaded", function () {
		let preloader = document.querySelector("#tx-preloader");
		window.addEventListener("load", function () {
			preloader.classList.add("preloaded");
			setTimeout(function () {
				preloader.remove();

				let txahero3 = new Swiper(".txa_hero_3_active", {
					loop: true,
					spaceBetween: 0,
					speed: 500,
					rtl: false,
					slidesPerView: 1,
					effect: "fade",
					autoplay: {
						delay: 5000,
					},
					fadeEffect: {
						crossFade: true,
					},
					pagination: {
						el: ".txa-hero-3-pagination",
						clickable: true,
						renderBullet: function (index, className) {
							return (
								'<span class="' +
								className +
								'">' +
								(index + 1) +
								"</span>"
							);
						},
					},

					navigation: {
						nextEl: ".txa_hero_3_next",
						prevEl: ".txa_hero_3_prev",
					},
				});

				// hero-2 slider

				let hero2sliderthumb = new Swiper(
					".hero_2_slider_preview_active",
					{
						loop: false,
						spaceBetween: 30,
						slidesPerView: 3,
						direction: "vertical",
						rtl: false,
						centeredSlides: false,
						watchSlidesProgress: false,
					}
				);

				function sliderActive_hero3() {
					/*------------------------------------
                Slider
                --------------------------------------*/
					if (jQuery(".hero_2_slider_active").length > 0) {
						let sliderActive1 = ".hero_2_slider_active";
						let sliderInit1 = new Swiper(sliderActive1, {
							// Optional parameters
							slidesPerView: 1,
							// paginationClickable: true,
							loop: true,
							effect: "fade",
							keyboard: true,
							// cssMode: true,
							// mousewheel: true,
							autoplay: {
								delay: 8000,
							},
							pagination: {
								el: ".gto_hero_3_pagination",
								type: "fraction",
							},
							navigation: {
								nextEl: ".gto_hero_3_next",
								prevEl: ".gto_hero_3_prev",
							},
							thumbs: {
								swiper: hero2sliderthumb,
							},
						});

						function animated_swiper(selector, init) {
							let animated = function animated() {
								$(selector + " [data-animation]").each(
									function () {
										let anim = $(this).data("animation");
										let delay = $(this).data("delay");
										let duration = $(this).data("duration");

										$(this)
											.removeClass("anim" + anim)
											.addClass(anim + " animated")
											.css({
												webkitAnimationDelay: delay,
												animationDelay: delay,
												webkitAnimationDuration:
													duration,
												animationDuration: duration,
											})
											.one(
												"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
												function () {
													$(this).removeClass(
														anim + " animated"
													);
												}
											);
									}
								);
							};
							animated();
							// Make animated when slide change
							init.on("slideChange", function () {
								$(
									sliderActive1 + " [data-animation]"
								).removeClass("animated");
							});
							init.on("slideChange", animated);
						}

						animated_swiper(sliderActive1, sliderInit1);
					}
				}

				sliderActive_hero3();

				/*
                hero-2-slider-end
            */
			}, 1000);
		});
	});

	/*
hero-3-end
*/

	/*
brand-logo-1
====start====
*/

	var dfasdfdf = new Swiper(".txa_brand_logo_1_active", {
		loop: true,
		rtl: true,
		speed: 1000,
		autoplay: {
			//add
			delay: 2000, //add
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 2,
			},
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 6,
			},
		},
	});


	let s3_thumb = new Swiper(".txa-s3-preview-active", {
		spaceBetween: 30,
		slidesPerView: "auto",
		loop: true,
		speed: 1000,
		rtl: false,
		centeredSlides: false,
		watchSlidesProgress: true,
		autoplay: {
			delay: 5000,
		},

		// breakpoints: {
		// 	320: {
		// 		slidesPerView: 1,
		// 	},
		// 	576: {
		// 		slidesPerView: 2,

		// 	},
		// 	768: {
		// 		slidesPerView: 2,

		// 	},
		// 	992: {
		// 		slidesPerView: 4,
		// 	},
		// 	1200: {
		// 		slidesPerView: 3,
		// 	},
		// }
	});

	let solutaions3 = new Swiper(".txa-s3-main-active", {
		loop: true,
		spaceBetween: 0,
		rtl: false,
		slidesPerView: 1,
		effect: "fade",
		autoplay: {
			delay: 5000,
		},
		fadeEffect: {
			crossFade: true,
		},
		thumbs: {
			swiper: s3_thumb,
		},
	});




	/*
popup-video-activition
====start====
*/
	$(".popup-video").magnificPopup({
		type: "iframe",
	});
	/*
popup-video-activition
====end====
*/

	/*
popup-img-activition
====start====
*/
	$(".popup_img").magnificPopup({
		type: "image",
		gallery: {
			enabled: true,
		},
	});
	/*
popup-img-activition
====end====
*/

	/*
counter-activition
====start====
*/
	$(".counter").counterUp({
		delay: 10,
		time: 3000,
	});
	/*
counter-activition
====end====
*/

	/*
data-bg-activition
====start====
*/
	$("[data-background]").each(function () {
		$(this).css(
			"background-image",
			"url(" + $(this).attr("data-background") + ") "
		);
	});
	/*
data-bg-activition
====end====
*/

	/*
data-width-activition
====start====
*/
	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});
	/*
data-width-activition
====end====
*/

	/*
data-bg-color-activition
====start====
*/
	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});
	/*
data-bg-color-activition
====end====
*/

	/*
mouse-move-animation
====start====
*/

	document.addEventListener("mousemove", parallax);
	function parallax(e) {
		document.querySelectorAll(".object").forEach(function (move) {
			var moving_value = move.getAttribute("data-value");
			var x = (e.clientX * moving_value) / 250;
			var y = (e.clientY * moving_value) / 250;

			move.style.transform =
				"translateX(" + x + "px) translateY(" + y + "px)";
		});
	}

	/*
mouse-move-animation
====end====
*/

	/*
odomater-activition
====start====
*/
	jQuery(".odometer").appear(function (e) {
		var odo = jQuery(".odometer");
		odo.each(function () {
			var countNumber = jQuery(this).attr("data-count");
			jQuery(this).html(countNumber);
		});
	});
	/*
odomater-activition
====end====
*/

	/*
knob-activition
====start====
*/
	if (typeof $.fn.knob != "undefined") {
		$(".knob").each(function () {
			var $this = $(this),
				knobVal = $this.attr("data-rel");

			$this.knob({
				draw: function () {
					$(this.i).val(this.cv + "%");
				},
			});

			$this.appear(
				function () {
					$({
						value: 0,
					}).animate(
						{
							value: knobVal,
						},
						{
							duration: 2000,
							easing: "swing",
							step: function () {
								$this
									.val(Math.ceil(this.value))
									.trigger("change");
							},
						}
					);
				},
				{
					accX: 0,
					accY: -150,
				}
			);
		});
	}
	/*
knob-activition
====end====
*/

	/*
back-to-top
=====start==== */
	var backtotop = $(".scroll-top");

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			backtotop.addClass("show");
		} else {
			backtotop.removeClass("show");
		}
	});

	backtotop.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "700");
	});
	/*
back-to-top
=====end====
*/

	/*
wow-activition
=====start====
*/
	new WOW().init();
	/*
wow-activition
=====end====
*/

	/*
back-to-top
=====start==== */
	var backtotop = $(".scroll-top");

	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			backtotop.addClass("show");
		} else {
			backtotop.removeClass("show");
		}
	});

	backtotop.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "700");
	});

	// nice select activation
	if($('select').length){
		$('select').niceSelect();
	}

	// qty activation
	if ($("input.product-count").length) {
		$("input.product-count").TouchSpin({
			min: 1,
			max: 1000,
			step: 1,
			buttondown_class: "btn btn-link",
			buttonup_class: "btn btn-link",
		});
	}

	// tab active
	document.querySelectorAll('.txa-case-study-1-wrap button').forEach(function(everyitem){

		var tabTrigger = new bootstrap.Tab(everyitem)
		everyitem.addEventListener('mouseenter', function(){
			tabTrigger.show();
		});
	});

	// Background Image Active
	function bgImageActive($scope, $) {
		$("[data-background]").each(function () {
			$(this).css(
				"background-image",
				"url(" + $(this).attr("data-background") + ") "
			);
		});
	}

	// Brand Active
	function brandActive($scope, $) {
		var txa_brand_logo_1_active = new Swiper(".txa_brand_logo_1_active", {
			loop: true,
			rtl: true,
			speed: 1000,
			autoplay: {
				delay: 2000,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
				},
				576: {
					slidesPerView: 2,
				},
				768: {
					slidesPerView: 4,
				},
				992: {
					slidesPerView: 5,
				},
				1200: {
					slidesPerView: 6,
				},
			},
		});
	}

	// hero slider active
	function heroSliderActive($scope, $) {
		document.addEventListener("DOMContentLoaded", function () {
			setTimeout(function () {
				let txahero3 = new Swiper(".txa_hero_3_active", {
					loop: true,
					spaceBetween: 0,
					speed: 500,
					rtl: false,
					slidesPerView: 1,
					effect: "fade",
					autoplay: {
						delay: 5000,
					},
					fadeEffect: {
						crossFade: true,
					},
					pagination: {
						el: ".txa-hero-3-pagination",
						clickable: true,
						renderBullet: function (index, className) {
							return (
								'<span class="' +
								className +
								'">' +
								(index + 1) +
								"</span>"
							);
						},
					},

					navigation: {
						nextEl: ".txa_hero_3_next",
						prevEl: ".txa_hero_3_prev",
					},
				});

				// hero-2 slider

				let hero2sliderthumb = new Swiper(
					".hero_2_slider_preview_active",
					{
						loop: false,
						spaceBetween: 30,
						slidesPerView: 3,
						direction: "vertical",
						rtl: false,
						centeredSlides: false,
						watchSlidesProgress: false,
					}
				);

				function sliderActive_hero3() {
					/*------------------------------------
				Slider
				--------------------------------------*/
					if (jQuery(".hero_2_slider_active").length > 0) {
						let sliderActive1 = ".hero_2_slider_active";
						let sliderInit1 = new Swiper(sliderActive1, {
							// Optional parameters
							slidesPerView: 1,
							// paginationClickable: true,
							loop: true,
							effect: "fade",
							keyboard: true,
							// cssMode: true,
							// mousewheel: true,
							autoplay: {
								delay: 8000,
							},
							pagination: {
								el: ".gto_hero_3_pagination",
								type: "fraction",
							},
							navigation: {
								nextEl: ".gto_hero_3_next",
								prevEl: ".gto_hero_3_prev",
							},
							thumbs: {
								swiper: hero2sliderthumb,
							},
						});

						function animated_swiper(selector, init) {
							let animated = function animated() {
								$(selector + " [data-animation]").each(
									function () {
										let anim = $(this).data("animation");
										let delay = $(this).data("delay");
										let duration = $(this).data("duration");

										$(this)
											.removeClass("anim" + anim)
											.addClass(anim + " animated")
											.css({
												webkitAnimationDelay: delay,
												animationDelay: delay,
												webkitAnimationDuration:
													duration,
												animationDuration: duration,
											})
											.one(
												"webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
												function () {
													$(this).removeClass(
														anim + " animated"
													);
												}
											);
									}
								);
							};
							animated();
							// Make animated when slide change
							init.on("slideChange", function () {
								$(
									sliderActive1 + " [data-animation]"
								).removeClass("animated");
							});
							init.on("slideChange", animated);
						}

						animated_swiper(sliderActive1, sliderInit1);
					}
				}

				sliderActive_hero3();

				/*
				hero-2-slider-end
			*/
			}, 1000);
		});
	}

	// SERVICE SLIDER ACTIVE
	function serviceSliderActive($scope, $) {

		if ($(".txa_pr2_active").length > 0) {
			let swiperrecent = new Swiper(".txa_pr2_active", {
				slidesPerView: 3,
				spaceBetween: 30,
				loop: true,
				centeredSlides: true,
				speed: 1000,
				rtl: false,
				infinite: false,
				grabCursor: true,
				autoplay: {
					delay: 3000,
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 1,
					},
					768: {
						slidesPerView: 1,
					},
					992: {
						slidesPerView: 1,
					},
					1200: {
						slidesPerView: 1,
					},
					1400: {
						slidesPerView: 1,
					},
					1600: {
						slidesPerView: 2,
					},
				},
			});
		}

		if ($(".txa-s3-preview-active").length > 0) {
			let s3_thumb = new Swiper(".txa-s3-preview-active", {
				spaceBetween: 30,
				slidesPerView: "auto",
				loop: true,
				speed: 1000,
				rtl: false,
				centeredSlides: false,
				watchSlidesProgress: true,
				autoplay: {
					delay: 5000,
				},
			});

			let solutaions3 = new Swiper(".txa-s3-main-active", {
				loop: true,
				spaceBetween: 0,
				rtl: false,
				slidesPerView: 1,
				effect: "fade",
				autoplay: {
					delay: 5000,
				},
				fadeEffect: {
					crossFade: true,
				},
				thumbs: {
					swiper: s3_thumb,
				},
			});
		}
		if ($(".txa-s3-active").length > 0) {
			let txas3 = new Swiper(".txa-s3-active", {
				loop: true,
				spaceBetween: 50,
				rtl: false,

				speed: 500,
				autoplay: {
					delay: 4000,
				},

				navigation: {
					nextEl: ".txa_s3_next",
					prevEl: ".txa_s3_prev",
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					480: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 1,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 2,
					},
					1200: {
						slidesPerView: 3,
						centeredSlides: true,
					},
				},
			});
		}
	}

	// blog slider active
	function blogSliderActive($scope, $) {

		let txab2 = new Swiper(".txa_blog_2_active", {
			loop: true,
			spaceBetween: 30,
			rtl: false,
			navigation: {
				nextEl: ".txa_blog_2_next",
				prevEl: ".txa_blog_2_prev",
			},
			speed: 500,
			autoplay: {
				delay: 4000,
			},

			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				480: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 2,
				},
				1200: {
					slidesPerView: 3,
					centeredSlides: true,
				},
			},
		});
	}

	// price box active
	function priceBoxActive($scope, $) {

		if ($(".txa-price-3-item.active").length > 0) {
			$(".txa-price-3-item").on("mouseover", function () {
				var current_class = document.getElementsByClassName("txa-price-3-item active");
				current_class[0].className = current_class[0].className.replace(
					" active",
					""
				);
				this.className += " active";
			});
		}
	}

	// testimonial active
	function testimonialActive($scope, $) {

		let txat3 = new Swiper(".txa-t3-active", {
			loop: true,
			rtl: false,
			speed: 1000,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: ".txa-t3-pagination",
				clickable: true,
			},
		});
	}


	$(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction("frontend/element_ready/tx_brand.default", brandActive);
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_count_box.default', function ($scope, $) {
			bgImageActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_hero_slider.default', function ($scope, $) {
			bgImageActive($scope, $);
			heroSliderActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_image_box.default', function ($scope, $) {
			bgImageActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_info_box.default', function ($scope, $) {
			bgImageActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_service_slide.default', function ($scope, $) {
			serviceSliderActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_post_grid.default', function ($scope, $) {
			blogSliderActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_pricing_box.default', function ($scope, $) {
			priceBoxActive($scope, $);
		} );
		elementorFrontend.hooks.addAction('frontend/element_ready/tx_testimonial.default', function ($scope, $) {
			testimonialActive($scope, $);
		} );
	});
})(jQuery);
