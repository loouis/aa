(function ($, root, undefined) {



// var myLazyLoad = new LazyLoad();

	$(function () {

		// Wow
		wow = new WOW({
		    mobile: false,        // trigger animations on mobile devices (default is true)
		});
		wow.init();

		// Click toggle function
		$.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };

		//---- Global variables
		var win = $(window),
				winWidth = $(window).width();


		//---- Header
		var mainHeader = $('.main-header'),
			mainHeaderAngle = $('.main-header__links-angle-bg'),
			mainHeaderLinks = $('.main-header__nav'),
			mainHeaderLink = $(".main-header__nav__links__link"),
			mainHeaderContactDetails = $('.main-header__contact-details'),
			mainHeaderContactDetailsItem = $('.main-header__contact-details__item'),
			ahoiaLogoAFirst = $(".ahoia-logo__letter--afirst"),
			ahoiaLogoALast = $(".ahoia-logo__letter--alast"),
			ahoiaLogoHideParts = $('.ahoia-logo__letter--hide'),
			ahoiaLogo = $('.ahoia-logo'),
			closeMenu = $('.main-header__close-btn'),
		// box = $('.box'),
		tl = new TimelineLite({paused:true});

		tl
			.to(mainHeaderAngle, 0.6, {rotation:-12, transformOrigin:"right bottom", ease:Circ.easeInOut})
			.to(ahoiaLogo, 0.6, {width:200, x:-40, y:16, ease:Circ.easeInOut}, 0)
			.to([ahoiaLogoAFirst, ahoiaLogoALast], 0.6, {x:0, ease:Circ.easeInOut}, '-=0.6')
			.staggerTo(ahoiaLogoHideParts, 0.2, {y:0, autoAlpha:1, ease:Circ.easeInOut}, 0.1, '-=0.3')
			.to([mainHeaderLinks, mainHeaderContactDetails], 0.3, {autoAlpha:1, y:20, visibility:"visible"}, '-=0.5')
			.staggerTo(mainHeaderLink, 0.2, {y:-20, autoAlpha:1, ease:Power1.easeOut}, 0.1, '-=0.5')
			.staggerTo(mainHeaderContactDetailsItem, 0.2, {y:-20, autoAlpha:1, ease:Power1.easeOut}, 0.1, '-=0.5');


		if(winWidth >= 900){
			mainHeader.hover(menuOver, menuOut);
		}else{

			// Mobile navigation functionality
			// Click logo to open nav
			ahoiaLogo.clickToggle(function() {
				mainHeader.addClass("main-header--open");
				$.fn.fullpage.setAllowScrolling(false);
			},
			function() {
				$.fn.fullpage.setAllowScrolling(true);
				mainHeader.removeClass("main-header--open");
			});

		}


		function menuOver(){
			tl.play();
		}

		function menuOut(){
			tl.reverse();
		}






		//------- Portfolio scroll scroll
		var $scrollDown = $("#scroll-down");

	  $scrollDown.on("click", function(e){
			e.preventDefault();
			TweenLite.to(window, 1.2, {scrollTo:{y:$('.work-single-info').position().top-80}, ease:Circ.easeInOut});
	  });

		//------- Single portfolio read more
		$('.work-single-info__read-more').on('click', function(e){
			e.preventDefault();
			$(this).hide();
			$('.work-single-info__wrapper__text-con').show();
		});

		// //------ Bx Slider init
		//  var slider = $('#bx-slider').bxSlider({
		// 	mode: 'horizontal',
		// });
    //
    //
		// $('.bx-slider__controls__arrows--next').on("click",function(){
    //   slider.goToNextSlide();
    //   return false;
    // });
    //
		// $('.bx-slider__controls__arrows--prev').on("click",function(){
    //   slider.goToPrevSlide();
    //   return false;
    // });

		// For each Container where we want to add a slider
    $('.bx-slider-container #bx-slider').each(function (index, element) {

        // initiate slider
        var slider = $(this).bxSlider({
						mode: 'fade',
            caption: false,
            adaptiveHeight: false,
            pager: false,
            controls: true
        });

				$(this).parents('.bx-slider-container').find('.bx-slider__controls').children('.bx-slider__controls__arrows--prev').click(function(){
					slider.goToPrevSlide();
              return false;
				});
				$(this).parents('.bx-slider-container').find('.bx-slider__controls').children('.bx-slider__controls__arrows--next').click(function(){
					slider.goToNextSlide();
              return false;
				});

    });


		//-------  Homepage triangle animation
		var sliderTextContainer = $('.slider-info__text-con'),
				sectionActive = $(".section.active"),
				sectionActiveAttr = sectionActive.data('slider'),
				shapeActive = $('.slider-info__text-con__item--active'),
				shapeActiveTitle = shapeActive.find(".slider-info__text-con__title"),
				shape = $('.slider-info__shape'),
				hometl = new TimelineLite({paused:true}),
				homeHidetl = new TimelineLite({paused:true});



		$(document).on('click', '#home_slideDown', function(e){
			e.preventDefault();
		  $.fn.fullpage.moveSectionDown();
		});

		$(document).on('click', '#home_slideUp', function(e){
			e.preventDefault();
			$.fn.fullpage.moveSectionUp();
		});

		$('#fullpage').fullpage({
			// scrollBar: true,
			loopBottom: true,
			fixedElements: '#slider-info, .full-page-slider__controls',

			afterLoad: function(anchorLink, index){

				var enteringSection = $(this),
					sliderInfoCon = $('.slider-info__text-con'),
					sectionAttr = enteringSection.data('slider'),
					sectionShape = $('body.fp-viewing-'+sectionAttr);

					shapeId = $('#item-'+sectionAttr);

					shapeId.addClass("slider-info__text-con__item--active");


				hometl
					.to($('.slider-info__text-con__item--active .container'), 0.1, {autoAlpha:1, y:0, ease:Circ.easeInOut, })
					.fromTo(shape, 0.6, {transformOrigin:'50% 50%', backfaceVisibility:'hidden',}, { transformOrigin:'50% 50%', backfaceVisibility:'hidden', ease:Circ.easeInOut});

				hometl.play();

			},

			onLeave: function(index, nextIndex, direction){

				var leavingSection = $(this),
					sliderInfoCon = $('.slider-info__text-con').find('.slider-info__text-con__item--active');

				homeHidetl
					.to($('.slider-info__text-con__item--active .container'), 0.3, {autoAlpha:0, y:20, ease:Circ.easeInOut})
					.fromTo(shape, 0.6, {rotationX:0, transformOrigin:'50% 50%', backfaceVisibility:'hidden', transformStyle:'preserve-3d', rotationX:0, ease:Circ.easeInOut}, {rotationX:360, transformStyle:'preserve-3d',backfaceVisibility:'hidden', transformOrigin:'50% 50%', ease:Circ.easeInOut}, '-=0.2');


				homeHidetl.play();

				sliderInfoCon.removeClass("slider-info__text-con__item--active");

			}

		});



		// Parallax hero
		win.on('resize scroll', function(){
			if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
				win.scroll(function(e){
					parallaxHero();
				});
			}
		});

		var singleWorkHero = $('.work-single-hero__img');

		function parallaxHero(){
			var scrolled = $(window).scrollTop(),
				scrolling = scrolled*0.0215;

			singleWorkHero.css({
				'opacity' : 1-(scrolled*.0015),
				'transform' : "translateY(" + (scrolled*-0.008) + "em)"
			});
		};


		if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
			//---- Parrallax mouseover
			var parallaxContainer = $('.full-page-slider'),
					parallaxItems = parallaxContainer.find(".parallax"),
					fixer = -0.001;

				$(document).on("mousemove", function(event){

					var pageX =  event.pageX - (parallaxContainer.width() * 0.5);  //get the mouseX - negative on left, positive on right
					var pageY =  event.pageY - (parallaxContainer.height() * 0.5); //same here, get the y. use console.log(pageY) to see the values


						//here we move each item
						parallaxItems.each(function(){

							var item 	= $(this);
							var speedX	= item.data("speed-x");
							var speedY	= item.data("speed-y");


							TweenLite.to(item, 0.8, {
								x: (item.position().left + pageX * speedX)*fixer,    //calculate the new X based on mouse position * speed
								y: (item.position().top + pageY * speedY)*fixer
							});

						});
					});
		}


	});

})(jQuery, this);
