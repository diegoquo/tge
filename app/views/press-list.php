<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];
$press_item = $WPGLOBAL['press_item'];
$social_link = $WPGLOBAL['social_link'];
$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];
$menu_learn = $WPGLOBAL['menu_learn'];
$menu_doc = $WPGLOBAL['menu_doc'];
$menu_user_guide = $WPGLOBAL['menu_user_guide'];
$menu_help = $WPGLOBAL['menu_help'];
$general_content = $WPGLOBAL['general_content'];

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

  <div class="press-section-a" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="press-container-a">
        <h1 class="heading">Press</h1>
      </div>

      
      <?php foreach ($press_item as $p) { ?>

          <div class="press-container-b">
            <div class="press-container-b-box-a">
            <a class="press-item-a w-inline-block" href="/press/<?= $p->getUid() ?>">
            <h3>
            <?= $p->getText('press.title') ? $p->getText('press.title') : "Untitled" ?>
            </h3>
            </a>
              <div class="p-big"><?= $p->getText('press.resume') ? $p->getText('press.resume') : "Untitled" ?></div>
            </div>
            <div class="press-container-b-box-b">
              <div><?= $p->getDate('press.date')->asText() ?></div>
            </div>
            <div class="press-container-c">
               <a class="press-link-a" href="/press/<?= $p->getUid() ?>">Load more</a>
            </div>
          </div>

          <!--
          <div class="press-container-b">

              <a class="press-item-a w-inline-block" href="#">
                 <h3>
                 <?= $p->getText('press_item.title') ? $p->getText('press_item.title') : "Untitled" ?>  
                 </h3>
              </a>
              <div class="p-big">
              <?= $p->getText('press_item.resume') ? $p->getText('press_item.resume') : "Untitled" ?> 
              </div>
              <div class="press-container-b-box-b">
                <div>
                <?= $p->getText('press_item.date') ? $p->getText('press_item.date') : "Untitled" ?> 
                </div>
              </div>
          </div> 
          --> 
      <?php } ?>
     
      
    </div>
  </div>

  <div class="section-a">
    <div class="container w-container">
      <div class="blog-container-b"><a class="blog-container-b-box-a w-inline-block"><img class="blog-container-b-arrow-a" src="images/arrow3x.png"><h3>Previous</h3></a><a class="blog-container-b-box-b w-inline-block"><img class="blog-container-b-arrow-b" src="images/arrow3x.png"><h3>Next</h3></a></div>
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