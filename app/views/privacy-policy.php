<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];
$menu_learn = $WPGLOBAL['menu_learn'];
$menu_doc = $WPGLOBAL['menu_doc'];
$menu_user_guide = $WPGLOBAL['menu_user_guide'];
$menu_help = $WPGLOBAL['menu_help'];
$general_content = $WPGLOBAL['general_content'];
$privacy_police = $WPGLOBAL['privacy_police'];

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
        <div class="nav-bar-a-box-b"><a class="link-a" href="contact.html">Contact us</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'menu_white.php'; ?>

  <div class="section-hero-b" data-ix="animate-on-load-a">
    <div class="container w-container" data-ix="animate-on-load-b">
      <div class="container-j" data-ix="animate-on-scroll-b">
        <div class="section-hero-b-iem-a">
          <h1>
             <?= $privacy_police->getText('privacy_police.title') ? $privacy_police->getText('privacy_police.title') : "Untitled" ?>
          </h1>
        </div>
        <div>
          <div class="p-big">
            <?= $privacy_police->getText('privacy_police.subtitle') ? $privacy_police->getText('privacy_police.subtitle') : "Untitled" ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a" data-ix="animate-on-load-c">
    <div class="container w-container">
      <div class="container-n">
        <div class="container-n-item-a">
          <div class="w-richtext">
            <p>Welcome to the &nbsp;website/service which is operated by &nbsp;Prototyping Ltd (in this Agreement, "", ", "we", "us" or "our").</p>
            <p>We run a prototyping service called and would love for you to use it. Our basic service is free, and we will offer more advanced features in the future. Our service is designed to give you as much control and ownership over what goes on your site as possible and encourage you to express yourself freely. However, we also encourage you to be responsible in what you publish as prototypes. In particular, make sure that no prohibited items such as spam, viruses, hate content, pirated material, copyrighted material etc. appear on or get linked to from your site. We do not claim any intellectual property rights whatsoever in/of your files.</p>
            <p>If you find a prototype that you believe violates our terms of service, please report it to help@123.com.</p>
          </div>
        </div>
        <div>
          <div class="w-richtext">
            <?= $privacy_police->getStructuredText("privacy_police.content")->asHtml($resolver); ?>
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