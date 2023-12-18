<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title></title>
</head>
<body>
  <header class="header">
    <div class="container">
      <menu class="menu">
        <div class="menu__logo">
          <div class="menu__logo-img">
            <?php
              if( has_custom_logo() ){
                echo get_custom_logo();
              }
            ?>
          </div>
          <a class="menu-link" href="index.php"><h2 class="menu__logo-title">Travel Blog</h2></a>
        </div>
        <ul class="menu__list">
          <li class="menu__list-item menu-link" id="home"><a class="nav-link" href="index.html">Домой</a></li>
          <li class="menu__list-item menu-link" id="menu"><a href="#" class="nav-link" href="#">Меню</a></li>
          <li class="menu-burger" id="menu-burger">
            <?php wp_nav_menu( [
              'theme_location'  => 'header',
              'container'       => false,
              'menu_class'      => 'menu__list-burger',
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ] );
            ?>
            <a class="menu__list-burger-btn" id="close-btn">
                <span></span>
                <span></span>
            </a>
          </li>

            <!-- <li class="menu__list-item menu-link"><a href="#">Все записи</a></li>
            <li class="menu__list-item menu-link"><a href="#">Галерея</a></li>
            <li class="menu__list-item menu-link"><a href="#">Видео</a></li>
            <li class="menu__list-item menu-link"><a href="#">О проекте</a></li> -->
        </ul>
      </menu>
      <div class="header__content">
        <h1 class="header__content-title">блог о путешествиях</h1>
        <p class="header__content-text"></p>
      </div>
    </div>
  </header>