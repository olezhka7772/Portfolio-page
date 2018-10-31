<?php
/*
Template Name: Портфолио
*/
?>
<?php 
get_header(); wp_head(); ?>
<div class="container d-flex flex-row justify-content-start">
  <?php 

  $defaults = array(
      // 'container'       => 'div',   // container element
       'separator'       => '>', // separator between items
      // 'before'          => '',      // HTML to output before
      // 'after'           => '',      // HTML to output after
      // 'show_on_front'   => true,    // whether to show on front
      // 'network'         => false,   // whether to create trail back to main site (multisite)
      // 'show_title'      => true,    // whether to show the current page title
      // 'show_browse'     => true,    // whether to show the "browse" text
      // 'echo'            => true,    // whether to echo or return the breadcrumbs

      /* Post taxonomy (examples follow). */
      // 'post_taxonomy' => array(
      //  // 'post'  => 'post_tag', // 'post' post type and 'post_tag' taxonomy
      //  // 'book'  => 'genre',    // 'book' post type and 'genre' taxonomy
      // ),

      /* Labels for text used (see Breadcrumb_Trail::default_labels). */
      'labels' => array(
        'browse'              => __( '',                             'breadcrumb-trail' ),
        // 'home'                => __( 'Home',                                'breadcrumb-trail' ),
        // 'error_404'           => __( '404 Not Found',                       'breadcrumb-trail' ),
        // 'archives'            => __( 'Archives',                            'breadcrumb-trail' ),
        // /* Translators: %s is the search query. The HTML entities are opening and closing curly quotes. */
        // 'search'              => __( 'Search results for &#8220;%s&#8221;', 'breadcrumb-trail' ),
        // /* Translators: %s is the page number. */
        // 'paged'               => __( 'Page %s',                             'breadcrumb-trail' ),
        // /* Translators: Minute archive title. %s is the minute time format. */
        // 'archive_minute'      => __( 'Minute %s',                           'breadcrumb-trail' ),
        // /* Translators: Weekly archive title. %s is the week date format. */
        // 'archive_week'        => __( 'Week %s',                             'breadcrumb-trail' ),

        // /* "%s" is replaced with the translated date/time format. */
        // 'archive_minute_hour' => '%s',
        // 'archive_hour'        => '%s',
        // 'archive_day'         => '%s',
        // 'archive_month'       => '%s',
        // 'archive_year'        => '%s',
      )
  );


   if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail($defaults); ?>
</div>

 <section id="portfolio">
      <div class="container">
     
           <div class="portfolio-head_block">
             <h1>Портфолио</h1>
             <div class="portfolio-animate_block">
               <img src="https://sitiar.io/wp-content/uploads/2018/06/portfolio-puzzle.png" alt="" />
             </div>
           </div>
            

          <div class="button-group filters-button-group">
            <button class="button is-checked" data-filter="*">Все работы</button>
            <button class="button" data-filter=".development">Разработка</button>
            <button class="button" data-filter=".seo-optimization">SEO оптимизация</button>
            <button class="button" data-filter=".smm-promotion">SMM продвижение</button>
            <button class="button" data-filter=".content-marketing">Контент-маркетинг</button>
          </div>

          <div class="grid">

              <div class="element-item development seo-optimization smm-promotion content-marketing" data-category="post-transition">
                  <div class="portfolio_block portfolio1_block portfolio-hover-effect">
                    <a href="/skayua-internet-magazin-texniki">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/skay-portfolio.jpg" alt="" />
                      <span class="image-text_block">Смотреть кейс</span>
                    </a>
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Skay.ua - интернет-магазин техники</span>
                      <span class="portfolio-title2_block">Разработка, SEO оптимизация, SMM продвижение, Контент-маркетинг</span>
                  </div>
              </div>

              <div class="element-item development smm-promotion content-marketing" data-category="transition">
                  <div class="portfolio_block portfolio1_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/plastic-time.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Plastic-time - клиника пластической хирургии</span>
                      <span class="portfolio-title2_block">Разработка, SEO оптимизация, SMM продвижение, Контент-маркетинг</span>
                  </div>
              </div>
        
              <div class="element-item development smm-promotion" data-category="metalloid">
                  <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/tango.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Tango - интернет-магазин мебели</span>
                      <span class="portfolio-title2_block">Разработка, SMM продвижение</span>
                  </div>
              </div>

              <div class="element-item seo-optimization" data-category="transition">
                 <div class="portfolio_block portfolio1_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/armored-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Armored - интернет-магазин аксессуаров</span>
                      <span class="portfolio-title2_block">SEO оптимизация</span>
                  </div>
              </div>

              <div class="element-item development seo-optimization smm-promotion" data-category="alkali">
                  <div class="portfolio_block portfolio1_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/wearme-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Wearme - интернет-магазин одежды</span>
                      <span class="portfolio-title2_block">Разработка, SEO оптимизация, SMM продвижение</span>
                  </div>
              </div>

              <div class="element-item seo-optimization" data-category="alkali">
                <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/nillkin-portfolio.jpg" alt="" />
                </div>
                <div class="portfolio_title">
                      <span class="portfolio-title_block">Nilkincase - интернет-магазин аксессуаров</span>
                      <span class="portfolio-title2_block">SEO оптимизация</span>
                </div>
              </div>

              <div class="element-item development seo-optimization smm-promotion content-marketing " data-category="transition">
                <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/appleua-portfolio.jpg" alt="" />
                </div>
                <div class="portfolio_title">
                      <span class="portfolio-title_block">Apple.UA - интернет-магазин техники</span>
                      <span class="portfolio-title2_block">Разработка, SEO оптимизация, SMM продвижение, Контент-маркетинг</span>
                </div>
              </div>

              <div class="element-item seo-optimization " data-category="post-transition">
                  <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/alaksesru-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Alakses - интернет-магазин мебели</span>
                      <span class="portfolio-title2_block">SEO оптимизация</span>
                  </div>
              </div>

              <div class="element-item development " data-category="metalloid">
                  <div class="portfolio_block portfolio1_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/bot-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">@AuctionUA_bot - Telegram-бот аукциона</span>
                      <span class="portfolio-title2_block">Разработка</span>
                  </div>
              </div>

              <div class="element-item development content-marketing" data-category="alkaline-earth">
                  <div class="portfolio_block portfolio1_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/reference-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Reference - интернет-магазин мебели</span>
                      <span class="portfolio-title2_block">Разработка, Контент-маркетинг</span>
                  </div>
              </div>

              <div class="element-item development content-marketing " data-category="transition">
                <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/framehouse-portfolio.jpg" alt="" />
                </div>
                <div class="portfolio_title">
                      <span class="portfolio-title_block">Framehouse.biz - строительство каркасных домов</span>
                      <span class="portfolio-title2_block">Разработка, Контент-маркетинг</span>
                </div>
              </div>

              <div class="element-item development " data-category="transition">
                  <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/complex-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Plex.com.ua - интернет-магазин техники</span>
                      <span class="portfolio-title2_block">Разработка</span>
                  </div>
              </div>

              <div class="element-item development seo-optimization smm-promotion content-marketing " data-category="post-transition">
                  <div class="portfolio_block portfolio2_block">
                      <img src="https://sitiar.io/wp-content/uploads/2018/portfolio/medclown-portfolio.jpg" alt="" />
                  </div>
                  <div class="portfolio_title">
                      <span class="portfolio-title_block">Medclown - благотворительная организация помощи детям</span>
                      <span class="portfolio-title2_block">Разработка, SEO оптимизация, SMM продвижение, Контент-маркетинг</span>
                  </div>
              </div>

            </div>
          </div>


      <!-- </div> -->  <!-- //WM fix unexpected closing tag -->
    </section>

<script>
  //WM Vanilla JS fast fix isotop.js animation + fix image height https://toster.ru/q/310090 
  document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function(){
    document.querySelector('.page-template-portfolio-page #portfolio .is-checked').click();
     },1000);
  });

</script>



<?php get_footer(); ?>