<?php 
/**
 * Template Name: Шаблон проекта
 * Template Post Type: post
 */
 ?>
<?php get_header(); ?>
    <script>
       $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:false,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
    });
    </script>
  <main class="main">
    <div class="container">
      <div class="item_page">
        <div class="galery">
          <div class="item">
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="<?php the_field('image'); ?>"> 
                        <img src="<?php the_field('image'); ?>" />
                         </li>
                    <li data-thumb="../img/« КОМЕТА 120М»пассажирское судно/DSC_0024.JPG"> 
                        <img src="../img/« КОМЕТА 120М»пассажирское судно/DSC_0024.JPG" />
                         </li>              
                </ul>
            </div> 
          </div>   
        </div>
        <div class="text">
          <?php the_field('text_of_case'); ?>
          <div class="origianal">
          <a href="<?php the_field('link_of_case'); ?>" target="_new"><span></span><p>оригинал</p></a>
        </div>
        </div>
      </div>
    </div> 
  </main>
<footer class="footer">
    <div class="container">
      <div class="logo">
        
      </div>
      <div class="contacts">
         <div class="soc">
          <a href="https://vk.com/id116133656" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/vk.svg" alt="vk"></a>
          <a href="#" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/instagram.svg" alt="instagram"></a>
          <a href="#" target="_new"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/whatsapp.svg" alt="whatsapp"></a>
        </div>
        <div class="phone cont" tel="+79159691705">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/phone_footer.svg" alt="телефон">+7(915) 969-17-05 
        </div>
        <div class="mail cont">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/mail_footer.svg" alt="почта">MODELYAR76@mail.ru
        </div>
      </div>
    </div>
</footer>
  <script src="../bootstrap-4.4.1-dist/js/bootstrap.js"></script>
  <script src="../js/script.js"></script>
  <div class="container"><span class="copyright">
<?php get_footer(); ?>