jQuery(document).ready(function($) {
	$('.slider').bxSlider({
	  pagerCustom: '#bx-pager',
	  nextText: '>',
	  prevText: '<'
	});
	$('.delivery h5').click(function(){
		$('.open').removeClass('open');
		$('.delivery p').slideUp();
		$(this).addClass('open');
		$('.open + p').slideDown();
	});
});
