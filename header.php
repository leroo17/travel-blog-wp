<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>Travel Blog</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <menu class="menu">
        <div class="menu__logo">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/backpacker.svg" alt="Логотип сайта" class="menu__logo-img">
          <a class="menu-link" href="index.php"><h2 class="menu__logo-title">Travel Blog</h2></a>
        </div>
        <ul class="menu__list">
          <li class="menu__list-item menu-link" id="home"><a href="index.html">Домой</a></li>
          <li class="menu__list-item menu-link" id="menu"><a href="#">Меню</a></li>
          <ul class="menu__list-burger" id="menu__list-burger">
            <li class="menu__list-item menu-link"><a href="#">Россия</a></li>
            <li class="menu__list-item menu-link"><a href="#">Санкт-Петербург</a></li>
            <li class="menu__list-item menu-link"><a href="#">Великий Новгород</a></li>
            <li class="menu__list-item menu-link"><a href="#">Выборг</a></li>
            <div class="menu__list-burger-btn" id="close-btn">
              <span></span>
              <span></span>
            </div>
          </ul>
        </ul>
      </menu>
      <div class="header__content">
        <h1 class="header__content-title">блог о путешествиях</h1>
        <p class="header__content-text"></p>
      </div>
    </div>
  </header>