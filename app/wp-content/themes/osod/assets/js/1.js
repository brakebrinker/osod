jQuery(document).ready(function ($) {

	var slider = $('.slider').bxSlider({
	  pagerCustom: '#bx-pager',
	  nextText: '>',
	  prevText: '<',
	});

	$(window).resize(function(){
		slider.reloadSlider();
	});

	$('.delivery h5').click(function(){
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('.delivery p').slideUp();
		}else{
			$('.open').removeClass('open');
			$('.delivery p').slideUp();
			$(this).addClass('open');
			$('.open + p').slideDown();
		};
		
	});
	$('.close-btn').click(function(){
		$(this).parents('.good-basket').slideUp();
	});
	$('.addcomm span').click(function(){
		$('.addcomm + textarea').fadeToggle();
	});
	$('.like').click(function(){
		$('.dropdown-like').slideToggle();
	});
	/*Попап*/
	$('.quick a').click(function(){
		$('.popup-wrapper').fadeIn();
		$('body').css('overflow-y', 'hidden');
		popslider = $('.popup-slider').bxSlider({
			nextText: '>',
			prevText: '<',
			pager: false
		});
		popslider
	});
	$('.popup .text a').click(function(){
		$('.popup-wrapper').fadeOut();
		$('body').css('overflow-y', 'auto');
		popslider.destroySlider();
	});
});
/*Главная страница*/
jQuery(document).ready(function($){
	$('.right-pager>:first-child').addClass('active');

	$('.right-pager a').not('.active').click(function(){
		var screen = $(this).attr('href');
		$('.right-pager .active').removeClass('active');
		$('[id^="screen"]').css('display','none');
		$(this).addClass('active');
		$('' + screen + '').fadeIn();
		if($('' + screen + '').hasClass('dark')){
			$('.right-pager').addClass('dark');
		}else{
			$('.right-pager').removeClass('dark');
		}
	});
});

