<?php /* Template Name: Контакты */ ?>
<?php get_header();?>
	<!-- <div class="slider mainSlider">
		<div class="slide slide-1"><img src="img/k1.jpg" alt=""></div>
		<div class="slide slide-2"><img src="img/k2.jpg" alt=""></div>
		<div class="slide slide-3"><img src="img/k3.jpg" alt=""></div>
		<div class="slide slide-4"><img src="img/k4.jpg" alt=""></div>
		<div class="slide slide-5"><img src="img/k5.jpg" alt=""></div>
		<div class="slide slide-6"><img src="img/k6.jpg" alt=""></div>
	</div> -->
	<main class="main fore-ground" >
		<div class="container contact_page">
			<div class="contacts__info">
			<h2>Контакты</h2>
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/phone.svg">
			<div class="phone" tel="+79159691705">+7<span>(</span>915<span>)</span> 969-17-05</div>
	        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/mail.svg">
        	<div class="mail">MODELYAR76<span>@</span>mail.com</div>
        	<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/pin.svg">
        	<div class="mail">Ярославская обл. <span>/</span> г. Рыбинск</div>
			</div>
		</div>
	</main>

	<footer class="footer footer1 footer-contacts">
    <div class="container">
      <div class="logo">
             </div>
      <div class="contacts contact__contacts">
       <div class="soc">
          <a href="https://vk.com/id116133656" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/vk.svg" alt="vk"></a>
          <a href="#" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/instagram.svg" alt="instagram"></a>
          <a href="#" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/whatsapp.svg" alt="whatsapp"></a>
        </div>
      </div>
    </div>
	</footer>
</div>

<!-- <script>
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
	})	
</script> -->
<div class="container"><span class="copyright copyright2">
<?php get_footer(); ?>