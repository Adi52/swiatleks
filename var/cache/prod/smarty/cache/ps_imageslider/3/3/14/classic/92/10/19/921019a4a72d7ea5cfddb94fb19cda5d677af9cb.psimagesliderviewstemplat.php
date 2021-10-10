<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:46:28
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616318e4d359c5_45153842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1633363913,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_616318e4d359c5_45153842 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost:8888/prestashop/6-accessories">
            <figure>
              <img src="http://localhost:8888/prestashop/modules/ps_imageslider/images/sample-1.jpg" alt="Otrzymaj 35% rabatu" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Rabat!</h2>
                  <div class="caption-description"><h1>35% rabatu!</h1>
<p>Tylko u nas! Z kodem <strong>35%OFF</strong> otrzymasz 35% rabatu na Twoje pierwsze zamówienie!</p>
<p>Śpiesz się! Oferta ograniczona czasowo.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8888/prestashop/6-accessories">
            <figure>
              <img src="http://localhost:8888/prestashop/modules/ps_imageslider/images/sample-2.jpg" alt="Tylko w Światłeks" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Tylko w Światłeks</h2>
                  <div class="caption-description"><h3>TEGO JESZCZE NIE BYŁO</h3>
<p>Lampy lepsze jakościowo oraz prawie tańsze niż w znanym szwedzkim sklepie!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8888/prestashop/6-accessories">
            <figure>
              <img src="http://localhost:8888/prestashop/modules/ps_imageslider/images/sample-3.jpg" alt="JAKOŚĆ" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">JAKOŚĆ</h2>
                  <div class="caption-description"><h3>ODMIEŃ SWOJE ŻYCIE</h3>
<p>Lampy od Światłeks odmienią Twoje życie. Takiej jakości jeszcze nie było!</p>
<p>Skorzystaj z najniższych cen.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
