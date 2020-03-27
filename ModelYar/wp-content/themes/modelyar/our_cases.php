<?php /* Template Name: Наши работы */ ?>
<?php get_header();?> 
  <main class="main">
    <div class="container">
      <div class="items">
        
           <?php 

          $posts = get_field('case');

          if( $posts ): ?>
              <ul>
              <?php foreach( $posts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li>
                    <div class="item">
                    <a href="<?php the_permalink() ?>">
                      <div class="item_img">
                        <div class="img">
                          <img src="<?php the_field('image'); ?>" alt="Image">
                        </div>
                      </div>
                      <div class="text"><?php the_field('signature'); ?>
                      </div>
                    </a>
                    </div>
                  </li>
              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); ?>
          <?php endif; ?>

      <!--   <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
                <article>
                    <div class="item">
                    <a href="<?php the_permalink() ?>">
                      <div class="item_img">
                        <div class="img">
                          <img src="<?php the_field('image'); ?>" alt="Image">
                        </div>
                      </div>
                      <div class="text"><?php the_field('signature'); ?>
                      </div>
                    </a>
                    </div>
                  </article>
        <?php }
      } ?> -->

      </div>
    </div> 
  </main>
  <footer class="footer">
    <div class="container">
      <div class="logo">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="логотип">
      </div>
      <div class="menu_footer">
        <ul>
          <?php wp_nav_menu(); ?>
        </ul>
      </div>
      <div class="contacts">
        <div class="soc">
          <a href="https://vk.com/id116133656"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/vk.svg" alt="vk"></a>
          <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/instagram.svg" alt="instagram"></a>
          <a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/whatsapp.svg" alt="whatsapp"></a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
  <!-- <script src="js/bootstrap.js"></script>
<script src="js/script.js"></script> -->
<div class="container"><span class="copyright">
<?php get_footer();?>