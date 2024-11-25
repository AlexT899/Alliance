<?php 
$page_title= 'О компании';
$header_style = 'page-header-bg-grey';
include_once('header-page.php');?>
  
  
  <section class="expert">
  <picture>
  <source type="image/webp" srcset="img/expert.webp">
  <source type="image/jpeg" srcset="img/expert.jpg">
  <img class="expert-photo" src="img/expert.jpg" alt="expert">
</picture>
    <div class="container">
      <div class="expert-content-wrapper">
        <div class="expert-content">
          <div class="expert-seporator"></div><!-- /.expert-seporator -->
          <h2 class="expert-section-title">мы - эксперты в области <br>производства химии</h2>
          <p class="expert-text">
            Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные <br>прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
          <!-- /.expert-text -->
        </div>
        <!-- /.expert-content -->
      </div>
      <!-- /.expert-content-wrapper -->
    </div>
  </section>
  <!-- /.section expert -->
  <?php include_once('./templates-parts/feature-slider.php');?>
 <section class="section-produce">
  <div class="container">
    <div class="produce-seporator"></div><!-- /.trademark-seporator -->
        <div class="produce-wrapper">
          <div class="produce-content">
            <h2 class="produce-section-title">Наше производство</h2>
            <div class="produce-text-content">
              <p class="produce-text">
                Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.</p>
                <p class="produce-text2">Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
            </div>
            <ul class="produce-list">
              <li class="produce-list-item items1">
                <svg width="30" height="30" class="produce-list-icon produce-icon1">
          <use href="img/sprite.svg#car"></use>
         </svg>
         Автомобильная химия
              </li>
              <li class="produce-list-item items2">
                <svg width="30" height="30" class="produce-list-icon produce-icon2">
          <use href="img/sprite.svg#home"></use>
         </svg>
         Бытовая химия
              </li>
              <li class="produce-list-item items3">
                <img src="img/daz.png" alt="" class="produce-list-icon produce-icon3">
         Дезинфицирующие средства
              </li>
             
              <li class="produce-list-item items4">
                <svg width="30" height="30" class="produce-list-icon produce-icon4">
          <use href="img/sprite.svg#cosm"></use>
         </svg>
         Пищевые аэрозоли
              </li>
              <li class="produce-list-item items5">
                <svg width="30" height="30" class="produce-list-icon produce-icon5">
          <use href="img/sprite.svg#cosmetic"></use>
         </svg>
         Косметическая продукция
              </li>
              <li class="produce-list-item items6">
                <svg width="30" height="30" class="produce-list-icon produce-icon6">
          <use href="img/sprite.svg#brush"></use>
         </svg>
         Краски аэрозольные
              </li>
            </ul>
          </div>
          <!-- /.clinets-content -->
          <picture>
            <source type="image/webp" srcset="img/production.webp">
            <source type="image/jpeg" srcset="img/production.png">
            <img class="produce-photo" src="img/production.png" alt="production">
          </picture>
        </div>
        <!-- /.clinets-wrapper -->
  </div>
 </section>

 <?php include_once('founder.php');?>
<?php include_once('./templates-parts/research-slider.php');?>

<?php include_once('./templates-parts/clients.php');?>

 <?php include_once('footer.php');?>