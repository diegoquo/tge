<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];
$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];

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
        <div class="section-hero-c-container-a-item-a" data-ix="animate-on-load-b">
          <h1>Analytics</h1>
        </div>
        <div class="section-hero-c-container-a-item-a">
          <div class="p-big">Get a clear and concise summary of the entire customer lifecycle with event-based analytics; what they do inside your app, for how long, what they like and what they dislike.</div>
        </div>
      </div>
      <div class="div-block-6">
        <div class="div-block-7"><img class="image-8" data-ix="animate-on-load-c" sizes="(max-width: 479px) 100vw, (max-width: 767px) 347px, (max-width: 991px) 417px, 764px" src="images/43x.png" srcset="images/43x-p-500.png 500w, images/43x-p-800.png 800w, images/43x-p-1080.png 1080w, images/43x-p-1600.png 1600w, images/43x-p-2000.png 2000w, images/43x.png 2454w">
        </div>
      </div>
    </div>
  </div>
  <div class="section-h">
    <div class="container w-container">
      <div class="container-p">
        <div class="container-p-box-a" data-ix="animate-on-scroll-a"><img class="image-3" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, (max-width: 991px) 41vw, 42vw" src="images/53x_2.png" srcset="images/53x_2-p-500.png 500w, images/53x_2-p-800.png 800w, images/53x_2-p-1080.png 1080w, images/53x_2-p-1600.png 1600w, images/53x_2.png 1767w">
        </div>
        <div class="container-p-box-b">
          <div class="container-p-box-b-item-a">
            <div class="icon-box-a" data-ix="animate-on-scroll-b"><img class="icon-pic-a" src="images/13x_7.png">
            </div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-c">
            <h2>Powerful analysis that will bring your app data to life.</h2>
            <div class="div-block-23"></div>
          </div>
          <div class="container-p-box-b-item-a" data-ix="animate-on-scroll-d">
            <div>Analyze your users by different attributes like Active Vs Inactive, Old Vs New, Sessions, OS Version segmentation and more. Dig deeper into the stats.</div>
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


  

  <div class="section-c" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="container-a" data-ix="animate-on-scroll-b">
        <div class="container-a-item-a">
          <h2>Want to discover all the features?</h2>
        </div>
        <div class="p-big">Events API, User Profiles API, Push &amp; Email API to make work for developers easier.</div>
      </div>
      <div class="container-e" data-ix="animate-on-scroll-b">
        <div class="tabs-1 w-tabs" data-duration-in="300" data-duration-out="100">
          <div class="tabs-1-menu w-tab-menu">
            <a class="tab-1-link-a w--current w-inline-block w-tab-link" data-w-tab="Tab 4">
              <div>Analytics</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 3">
              <div>User profiles</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 1">
              <div>Events</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 5">
              <div>Geo-distribution</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 6">
              <div>Funnels and segments</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 7">
              <div>Campaigns</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 8">
              <div>In app notifications</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 9">
              <div>Push notifications</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 10">
              <div>SMS Messages</div>
            </a>
            <a class="tab-1-link-a w-inline-block w-tab-link" data-w-tab="Tab 2">
              <div>Email messages</div>
            </a>
          </div>
          <div class="tabs-1-content w-tab-content">

           
            <?php
               foreach ($features_items as $feature) { 
                ++$cont;
            ?>
            <!--
            srcset="images/-43x_1-p-500.png 500w, images/-43x_1-p-800.png 800w, images/-43x_1-p-1080.png 1080w, images/-43x_1-p-1600.png 1600w, images/-43x_1.png 1623w"

            sizes="(max-width: 479px) 180px, (max-width: 767px) 220px, (max-width: 991px) 300px, 400.734375px"

            -->
            <div class="tab-1-pane w--tab-active w-tab-pane" data-w-tab="Tab <?php echo $cont ?>" />
              <div>
                <div class="tab-1-item-a" data-ix="animate-on-scroll-c">

                <div class="tab-1-item-a">
                <img class="image" 
                     data-ix="tabs-1" 
                     src="<?= $feature->getImage('features_item.featured_image')->getUrl() ?>" />
                </div>
                
                </div>
                <div class="tab-1-item-a" data-ix="tabs-2">
                  <h3 data-ix="animate-on-scroll-d">
                    <?= $feature->getText('features_item.title') ? $feature->getText('features_item.title') : "Untitled" ?>
                  </h3>
                </div>
                <div class="tab-1-item-a" data-ix="tabs-2">
                  <div class="p-big" data-ix="animate-on-scroll-e">
                    <?= $feature->getText('features_item.content') ? $feature->getText('features_item.content') : "Untitled" ?>
                    
                  </div>
                </div>
                <a 
                class="button-b w-button" 
                data-ix="tabs-2" 
                href="<?= $feature->getLink('features_item.link')->getUrl($linkResolver) ?>">Learn more</a>

              </div>
            </div>

            <?php } ?> 
           
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