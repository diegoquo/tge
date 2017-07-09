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
$email_marketing = $WPGLOBAL['email_marketing'];

$home = $WPGLOBAL['home'];

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
            <?= $email_marketing->getText('email_marketing.title') ? $email_marketing->getText('email_marketing.title') : "Untitled" ?>
          </h1>
        </div>
        <div class="section-hero-c-container-a-item-a">
          <div class="p-big">
            <?= $email_marketing->getText('email_marketing.subtitle') ? $email_marketing->getText('email_marketing.subtitle') : "Untitled" ?>
          </div>
        </div>
      </div>
      <div class="div-block-6">
        <div class="div-block-7">
        <img class="image-8" data-ix="animate-on-load-c"  
             src="<?= $email_marketing->getImage("email_marketing.featured_image")->getUrl() ?>" >
        </div>
      </div>
    </div>
  </div>
  <div class="section-h">
    <div class="container w-container">
      <div class="container-p">
        <?php foreach($email_marketing->getGroup('email_marketing.sub_item')->getArray() as $item) { ?>
        <div class="container-p-box-a" data-ix="animate-on-scroll-a">
        <img class="image-3" 
             src="<?= $item->getImage("featured_pic")->getUrl() ?>">
        </div>
        <div class="container-p-box-b">
          
          <div class="container-p-box-b-item-a">
            <div class="icon-box-a" data-ix="animate-on-scroll-b">
            <img class="icon-pic-a" src="<?= $item->getImage("icon")->getUrl() ?>">
            </div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-c">
            <h2>
              <?= $item->getText('headline') ? $item->getText('headline') : "Untitled" ?>
            </h2>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-d">
            <div>
              <?= $item->getText('description') ? $item->getText('description') : "Untitled" ?>
            </div>
          </div>
          
        </div>
        <div class="div-block-8">
          <div class="abstract-b"></div>
          <div class="abstract-c"></div>
          <div class="abstract-a"></div>
        </div>
        <?php } ?>
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