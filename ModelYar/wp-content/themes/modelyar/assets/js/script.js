$(document).ready(function(){
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu').toggleClass('active');
		$('body').toggleClass('lock');
		
	});
});
  $(document).ready(function() {
    if($('.mainSlider').length){
      $('.topHeader').addClass('hasSlider');
      $('.mainSlider').slick({
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
      })
    }
  });