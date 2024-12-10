<?php 
$page_title= 'Контакты';
$header_style = 'page-header-bg-grey';
include_once('header-page.php');?>
<footer class="footer">
      <div class="container">
        <div class="contact-top">
           <a href="tel:+74996861014" class="contact-phone">
            +7 (499) 686-10-14
          </a>
          <div class="contact-info">
          <div class="footer-info">
            <svg class="contact-map-icon"  width="36" height="36">
              <use href="img/sprite.svg#mark"></use>
             </svg>
             <address class="contact-info-address">
              г. Мосвка, Холодильный пер. 4к1с8
            </address>
            
          </div>
          </div>
          <!-- /.mobile-info -->
          <div class="c-info">
          <div class="footer-info">
          <svg class="contact-mail-icon"  width="36" height="36">
            <use href="img/sprite.svg#mail"></use>
           </svg>
           <a href="mailto:a.dragunov@tdaliance.ru" class="contact-info-email">
            a.dragunov@tdaliance.ru
          </a>
        </div>
          </div>
        <!-- /.mobile-info -->
        <div class="footer-social">
          <a href="https://vk.com/feed" class="contact-social-link-vk">
            <svg class="network-icon"  width="36" height="36">
              <use href="img/sprite.svg#vk"></use>
             </svg>
        </a>
          <a href="https://www.instagram.com/" class="contact-social-link-inst">
            <svg class="network-icon"  width="36" height="36">
              <use href="img/sprite.svg#inst"></use>
             </svg>
          </a>
        </div>
        <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
        
      </div><!-- /.container-->
      <div class="container">
      <div class="contact-map">
        <script  async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af6ed07aab8ca235b6e574b7c5ee93269f6ab73dc3fb39b505d1fb142098571dc&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
    </footer>

      
 <?php include_once('footer.php');?>