<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];
$social_link = $WPGLOBAL['social_link'];
$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];
$menu_learn = $WPGLOBAL['menu_learn'];
$menu_doc = $WPGLOBAL['menu_doc'];
$menu_user_guide = $WPGLOBAL['menu_user_guide'];
$menu_help = $WPGLOBAL['menu_help'];
$general_content = $WPGLOBAL['general_content'];
$terms_of_service = $WPGLOBAL['terms_of_service'];

$cont = 0;

$title = "TODO";

?>

<?php include 'header.php'; ?>
    
    <div class="nav-bar-a" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="nav-bar-a-container">
        <div class="nav-bar-a-box-a">
          <div>Schedule a 1:1 product walkthrough<span> with a mobile marketing expert and learn how to optimally segment, track and engage app users in real-time.</span>
          </div>
        </div>
        <div class="nav-bar-a-box-b"><a class="link-a" href="/contact">Contact us</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'menu_white.php'; ?>

  <div class="section-hero-b" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="container-j" data-ix="animate-on-load-b">
        <div class="section-hero-b-iem-a">
          <h1>
            <?= $terms_of_service->getText('terms_of_service.title') ? $terms_of_service->getText('terms_of_service.title') : "Untitled" ?>
          </h1>
        </div>
        <div class="section-hero-b-iem-a">
          <div class="p-big">

          <?= $terms_of_service->getText('terms_of_service.subtitle') ? $terms_of_service->getText('terms_of_service.subtitle') : "Untitled" ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="container-n">
        <div>
          <div class="w-richtext">
              <?= $terms_of_service->getStructuredText("terms_of_service.content")->asHtml($resolver); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php include 'customers.php'; ?>

  <div class="section-call-of-action-a" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="section-call-of-action-a-container-a">
        <div class="section-call-of-action-container-a-item-a">
          <h2 data-ix="animate-on-scroll-b">Discover what your users do, engage with them with personalized notifications, and optimize <br>your marketing efforts.</h2>
        </div>
        <div class="section-call-of-action-a-container-a-item-b"><a class="button-b w-button" data-ix="animate-on-scroll-c" href="sign-up.html">Let's get started</a>
          <div class="section-call-of-action-a-container-a-item-b-sub-item-a"><a class="button-c w-button" data-ix="animate-on-scroll-d" href="#">Chat with us</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>