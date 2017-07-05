<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];

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
          <div>
             <?= $general_content->getText('general_content.header_bar') ? $general_content->getText('general_content.header_bar') : "Untitled" ?>
          </div>
        </div>
        <div class="nav-bar-a-box-b"><a class="link-a" href="/contact">Contact us</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'menu.php'; ?>


  <div class="hero-a-section" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="hero-a-container">
        <div class="hero-a-box-a">
          <div class="hero-a-box-a-item-a" data-ix="animate-on-load-c">
            <h1>Mobile App Analytics &amp; Engagement. Simplified.</h1>
          </div>
          <div class="hero-a-box-a-item-a" data-ix="animate-on-load-d">
            <div class="p-big">Tapgage helps you get to know your users, analyze your audience, and engage with them. All at the same time.</div>
          </div>
          <div class="hero-a-box-a-item-a" data-ix="animate-on-load-e"><a class="button-b w-button" href="#">Let's get started</a>
          </div>
        </div>
        <div class="hero-a-box-b">
          <a class="hero-a-item-b w-inline-block" data-ix="animate-on-load-f" href="#"><img class="image-37" src="images/Asset-243x.png"><img class="image-38" src="images/Asset-243x.png"><img class="image-39" src="images/Asset-243x.png"><img class="image-40" sizes="(max-width: 767px) 100vw, 147.375px" src="images/Asset-273x.png" srcset="images/Asset-273x-p-500.png 500w, images/Asset-273x.png 717w"><img class="image-41" src="images/Asset-283x.png"><img class="image-35" data-ix="home-animate-a-10" sizes="(max-width: 767px) 100vw, (max-width: 991px) 611.515625px, 60vw" src="images/Asset-253x.png" srcset="images/Asset-253x-p-500.png 500w, images/Asset-253x-p-800.png 800w, images/Asset-253x-p-1080.png 1080w, images/Asset-253x-p-1600.png 1600w, images/Asset-253x-p-2000.png 2000w, images/Asset-253x-p-2600.png 2600w, images/Asset-253x.png 2955w"><img class="image-36" data-ix="home-animate-a-9" sizes="(max-width: 767px) 100vw, 553.953125px" src="images/Asset-263x.png" srcset="images/Asset-263x-p-1080.png 1080w, images/Asset-263x-p-1600.png 1600w, images/Asset-263x-p-2000.png 2000w, images/Asset-263x-p-2600.png 2600w, images/Asset-263x.png 2721w"><img class="image-31" data-ix="home-animate-a-5" sizes="(max-width: 767px) 100vw, 300.828125px" src="images/Asset-233x.png" srcset="images/Asset-233x-p-500.png 500w, images/Asset-233x-p-800.png 800w, images/Asset-233x-p-1080.png 1080w, images/Asset-233x.png 1500w"><img class="image-32" data-ix="home-animate-a-6" src="images/Asset-213x.png"><img class="image-33" data-ix="home-animate-a-7" sizes="(max-width: 767px) 100vw, 177.703125px" src="images/Asset-203x.png" srcset="images/Asset-203x-p-500.png 500w, images/Asset-203x-p-800.png 800w, images/Asset-203x.png 861w"><img class="image-34" data-ix="home-animate-a-8" sizes="(max-width: 767px) 100vw, 423.109375px" src="images/Asset-223x.png" srcset="images/Asset-223x-p-500.png 500w, images/Asset-223x-p-800.png 800w, images/Asset-223x-p-1080.png 1080w, images/Asset-223x-p-1600.png 1600w, images/Asset-223x-p-2000.png 2000w, images/Asset-223x.png 2070w"><img class="image-28" data-ix="home-animate-a-1" src="images/Asset-193x.png"><img class="image-29" data-ix="home-animate-a-2" src="images/Asset-163x.png"><img class="image-30" data-ix="home-animate-a-3" src="images/Asset-133x.png"><img class="image-25" data-ix="home-animate-a-1" src="images/Asset-183x.png"><img class="image-26" data-ix="home-animate-a-2" src="images/Asset-163x.png"><img class="image-27" data-ix="home-animate-a-3" src="images/Asset-143x.png"><img class="image-22" data-ix="home-animate-a-1" src="images/Asset-173x.png"><img class="image-23" data-ix="home-animate-a-2" src="images/Asset-163x.png"><img class="image-24" data-ix="home-animate-a-3" src="images/Asset-153x.png"><img class="image-17" data-ix="home-animate-a-1" src="images/Asset-53x.png"><img class="image-18" data-ix="home-animate-a-2" src="images/Asset-23x.png"><img class="image-19" data-ix="home-animate-a-3" src="images/Asset-73x.png"><img class="image-20" data-ix="home-animate-a-4" src="images/Asset-113x.png"><img class="image-21" data-ix="home-animate-a-4" src="images/Asset-103x.png"><img class="image-14" data-ix="home-animate-a-3" src="images/Asset-33x_1.png"><img class="image-15" data-ix="home-animate-a-4" src="images/Asset-83x.png"><img class="image-16" data-ix="home-animate-a-4" src="images/Asset-93x.png"><img class="image-13" data-ix="home-animate-a-2" src="images/Asset-23x.png"><img class="image-12" data-ix="home-animate-a-1" src="images/Asset-53x.png">
          </a><img class="image-42" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, 100vw" src="images/13x_4.png" srcset="images/13x_4-p-500.png 500w, images/13x_4-p-800.png 800w, images/13x_4-p-1080.png 1080w, images/13x_4-p-1600.png 1600w, images/13x_4.png 2202w">
        </div>
      </div>
    </div>
  </div>



  <div class="section-a" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="container-a" data-ix="animate-on-scroll-b">
        <div class="container-a-item-a">
          <h2>3 key points to get you started with Tapgage</h2>
        </div>
        <div class="p-big">Evaluate how users perceive your app and improve your engagement campaigns accordingly.</div>
      </div>
      <div class="section-a-container-b">
        <div class="container-b-item-a" data-ix="animate-on-scroll-c">
          <div class="container-b-item-a-sub-item-a">
            <a class="icon-box-a w-inline-block" href="#"><img class="icon-pic-a" src="images/-13x.png">
            </a>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <h4>Discover what your users do</h4>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <div>Our powerful programmatic analytics helps you understand the behavior of your users and improve your app.</div>
          </div>
        </div>
        <div class="container-b-item-a" data-ix="animate-on-scroll-d">
          <div class="container-b-item-a-sub-item-a">
            <a class="icon-box-a w-inline-block" href="#"><img class="icon-pic-a" src="images/-1-copy3x.png">
            </a>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <h4>Engage with your users&nbsp;</h4>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <div>Develop long lasting relationships with your customers by delivering relevant experiences at every interaction.</div>
          </div>
        </div>
        <div class="container-b-item-a" data-ix="animate-on-scroll-e">
          <div class="container-b-item-a-sub-item-a">
            <a class="icon-box-a w-inline-block" href="#"><img class="icon-pic-a" src="images/-1-copy-23x.png">
            </a>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <h4>Optimize your marketing efforts</h4>
          </div>
          <div class="container-b-item-a-sub-item-a">
            <div>Turn your metrics into marketing goals, see what works and what doesn’t and with this information, get an idea of what you can do to retain the users.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-b" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="container-c" data-ix="animate-on-scroll-b">
        <div class="container-c-box-a">
          <h4>Developer-Centric</h4>
        </div>
        <div class="container-c-box-b">
          <div>We are developer-centric and listen to their pain actively and always try to resolve it. Tapgage is built to scale from root level and can accommodate both small and enterprise companies. We believe in simplicity, and with our platform you can get started in matter of minutes.</div>
        </div>
      </div>
      <div class="container-d">
        <div class="container-d-box-a" data-ix="animate-on-scroll-c">
          <div class="container-d-item-a">
            <h2>What can Tapgage do?</h2>
          </div>
          <div class="container-d-item-a">
            <div>Our service can help you analyze your users by different attributes like Active Vs Inactive, Old Vs New, Sessions, OS Version segmentation and more. Dig deeper into the stats. We make it easy and understandable.</div>
          </div>
        </div>
        <div class="container-d-box-b" data-ix="animate-on-scroll-d">
          <div class="container-d-item-a">
            <h4>Knowing and analyzing your app customers should not be complicated</h4>
            <div>Tapgage is a simple mobile app analytics platform, which integrates mobile analytics and engagement for mobile developers.</div>
          </div>
          <div class="container-d-item-a">
            <h4>We make it easy and understandable</h4>
            <div>Tapgage lets you know each customer with great detail, see what they do inside your app, for how long, what they like and dislike and the reason why they might leave/uninstall your app.</div>
          </div>
          <div class="container-d-item-a">
            <h4>Engage with customers in multiple simple ways</h4>
            <div>Tapgage lets you engage with customers in multiple ways - through push notifications, in-app messages, SMS or email.</div>
          </div>
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