<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];
$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];
$general_content = $WPGLOBAL['general_content'];
$menu_learn = $WPGLOBAL['menu_learn'];
$menu_doc = $WPGLOBAL['menu_doc'];
$menu_user_guide = $WPGLOBAL['menu_user_guide'];
$menu_help = $WPGLOBAL['menu_help'];
$general_content = $WPGLOBAL['general_content'];
$home = $WPGLOBAL['home'];
$geodist = $WPGLOBAL['geodist'];


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

  <?php include 'menu.php'; ?>

  <div class="section-hero-c" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="section-hero-c-container-a" data-ix="animate-on-load-b">
        <div class="section-hero-c-container-a-item-a">
          <h1>
          <?= $geodist->getText('geo-distribution.title') ? $geodist->getText('geo-distribution.title') : "Untitled" ?>
          </h1>
        </div>
        <div class="section-hero-c-container-a-item-a">
          <div class="p-big">
            <?= $geodist->getText('geo-distribution.subtitle') ? $geodist->getText('geo-distribution.subtitle') : "Untitled" ?>
          </div>
        </div>
      </div>
      <div class="div-block-6">
        <div class="div-block-7"><img class="image-8" data-ix="animate-on-load-c" sizes="(max-width: 479px) 100vw, (max-width: 767px) 367px, (max-width: 991px) 441px, 808px" src="images/33x_1.png" srcset="images/33x_1-p-500.png 500w, images/33x_1-p-800.png 800w, images/33x_1-p-1080.png 1080w, images/33x_1-p-1600.png 1600w, images/33x_1-p-2000.png 2000w, images/33x_1.png 2454w">
        </div>
      </div>
    </div>
  </div>
  
  <div class="section-h">
    <div class="container w-container">
      <div class="container-p">
        <div class="container-p-box-a" data-ix="animate-on-scroll-a"><img class="image-3" sizes="(max-width: 479px) 100vw, (max-width: 767px) 390.140625px, (max-width: 991px) 41vw, 42vw" src="images/63x_1.png" srcset="images/63x_1-p-500.png 500w, images/63x_1-p-800.png 800w, images/63x_1-p-1080.png 1080w, images/63x_1.png 1545w">
        </div>
        <div class="container-p-box-b">
          <div class="container-p-box-b-item-a">
            <div class="icon-box-a" data-ix="animate-on-scroll-b"><img class="icon-pic-a" src="images/13x_5.png">
            </div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-c">
            <h2>Dealing with a global audience</h2>
            <div class="div-block-23"></div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-d">
            <div>Analyze and target your customers by their location.</div>
          </div>
        </div>
        <div class="div-block-8">
          <div class="abstract-b"></div>
          <div class="abstract-c"></div>
          <div class="abstract-a"></div>
        </div>
      </div>
      <div class="container-p container-p-reverse">
        <div class="container-p-box-a" data-ix="animate-on-scroll-a"><img class="image-3" sizes="(max-width: 479px) 100vw, (max-width: 767px) 388.46875px, (max-width: 991px) 41vw, 42vw" src="images/73x.png" srcset="images/73x-p-500.png 500w, images/73x-p-800.png 800w, images/73x-p-1080.png 1080w, images/73x.png 1545w">
        </div>
        <div class="container-p-box-b">
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-b">
            <div class="icon-box-a"><img class="icon-pic-a" src="images/1-copy3x_1.png">
            </div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-c">
            <h2>Fulfilling requirements by area</h2>
            <div class="div-block-23"></div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-d">
            <div>See the trend of locations and optimize those customers’ requirements.</div>
          </div>
        </div>
        <div class="div-block-8">
          <div class="abstract-b"></div>
          <div class="abstract-c"></div>
          <div class="abstract-a"></div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'features.php'; ?>
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