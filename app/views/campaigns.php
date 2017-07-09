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
$campaigns = $WPGLOBAL['campaigns'];


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

  <?php include 'menu.php'; ?>


  <div class="section-hero-c" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="section-hero-c-container-a" data-ix="animate-on-load-b">
        <div class="section-hero-c-container-a-item-a">
          <h1>
            <?= $campaigns->getText('campaigns.title') ? $campaigns->getText('campaigns.title') : "Untitled" ?>
          </h1>
        </div>
        <div class="section-hero-c-container-a-item-a">
          <div class="p-big">
            <?= $campaigns->getText('campaigns.subtitle') ? $campaigns->getText('campaigns.subtitle') : "Untitled" ?>
          </div>
        </div>
      </div>
      <div class="div-block-6">
        <div class="div-block-7">
        <img class="image-8" src="<?= $campaigns->getImage('campaigns.featured_image')->getUrl() ?>" >
        </div>
      </div>
    </div>
  </div>
  <div class="section-h">
    <?php 
    $c=0;
    foreach($campaigns->getGroup('campaigns.sub_item')->getArray() as $item) { 
      if ($c == 0){
        $c=1;
      ?>
    <div class="container w-container">
      <div class="container-p">
        <div class="container-p-box-a" data-ix="animate-on-scroll-a">
        <img class="image-3" src="images/-63x_2.png">
        </div>
        
        <div class="container-p-box-b">
          <div class="container-p-box-b-item-a">
            <div class="icon-box-a" data-ix="animate-on-scroll-b">
               <img class="icon-pic-a" src="<?= $item->getImage("featured_pic")->getUrl() ?>">
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
      </div>
      <?php } else {?>
      <div class="container-p container-p-reverse">
        <div class="container-p-box-a" data-ix="animate-on-scroll-a">
        <img class="image-3" src="images/--83x.png" >
        </div>
        <div class="container-p-box-b">
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-b">
            <div class="icon-box-a"><img class="icon-pic-a" src="images/-1-copy3x_3.png">
            </div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-c">
            <h2>Reengagement Campaigns</h2>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-d">
            <div>Engage with users who have uninstalled the app with the email campaigns.</div>
          </div>
        </div>
        <div class="div-block-8">
          <div class="abstract-b"></div>
          <div class="abstract-c"></div>
          <div class="abstract-a"></div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
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