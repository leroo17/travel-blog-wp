<footer class="footer">
    <div class="container container-footer">
      <div class="footer__main">
        <div class="footer__logo">
          <div class="menu__logo">
              <div class="menu__logo-img">
                <?php
                  if( has_custom_logo() ){
                    echo get_custom_logo();
                  }
                ?>
              </div>
              <a class="menu-link" href="https://travel-blog.wfile.ru/"><h2 class="menu__logo-title">Travel Blog</h2></a>
            </div>
          </div>
          <div class="footer__menu">
              <?php wp_nav_menu( [
                  'theme_location'  => 'footer',
                  'container'       => false,
                  'menu_class'      => 'footer__menu-list',
                  'echo'            => true,
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ] );
              ?>
          </div>
      </div>
      <div class="footer__copyright">
        <a class="footer__info-item menu-link"><a href="https://t.me/irish_kin">Разработка сайта</a></a>
        <p>2023 © Все права защищены</p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>