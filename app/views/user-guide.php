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
          <div>Schedule a 1:1 product walkthrough<span> with a mobile marketing expert and learn how to optimally segment, track and engage app users in real-time.</span>
          </div>
        </div>
        <div class="nav-bar-a-box-b"><a class="link-a" href="/contact">Contact us</a>
        </div>
      </div>
    </div>
  </div>

  <?php include 'menu_white.php'; ?>

  <div class="section-i"></div>
  <div class="section-j" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="section-j-container-a">
        <div class="section-j-container-a-box-a">
          <div class="section-k-container-a-box-a-item-a">
            <div class="p-big w-hidden-tiny">User guides</div>
            <h1 class="w-hidden-main w-hidden-medium w-hidden-small">User guides</h1>
          </div>
          <div class="div-block-10"><a class="link" href="#">Dev Docs iOS</a>
          </div>
          <div class="div-block-10"><a class="link" href="#">Dev Docs Android</a>
          </div>
          <div class="div-block-10"><a class="link" href="#">Dev Docs SDK</a>
          </div>
          <div class="div-block-10"><a class="link" href="#">Dev Docs Profile API</a>
          </div>
          <div class="div-block-10"><a class="link" href="documentation.html">Dev Docs Push API</a>
          </div>
          <div class="div-block-10"><a class="link" href="#">Dev Docs iOS</a>
          </div>
        </div>
        <div class="section-j-container-a-box-c">
          <div class="section-k-container-a-box-a-item-a">
            <h2>Dev Docs Push API</h2>
          </div>
          <div class="w-richtext">
            <p>CleverTap provides HTTP API endpoints to your data. Endpoints for working with Events, User Profiles, Dashboard Counts and Push Notifications are currently supported.</p>
            <p>Above listed API endpoints support complex filters using CleverTap Query Language. For in-depth documentation see Understanding CleverTap Query Language.</p>
            <figure class="w-richtext-figure-type-image w-richtext-align-fullwidth">
              <div><img src="images/Illustration3x.png">
              </div>
            </figure>
            <h2>Importing Historical Data</h2>
            <p>Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.</p>
            <p>It’s a 2 step process to import historical data into CleverTap:</p>
            <p>Using CleverTap’s Server APIs you can import important historical data that you have collected in your own internal systems or from other analytical/engagement tools you might have been using previously.</p>
          </div>
        </div>
        <div class="section-j-container-a-box-b">
          <div class="section-k-container-a-box-a-item-a">
            <div class="text-block">Table of contents</div>
          </div>
          <div class="section-k-container-a-box-a-item-a"><a class="link-2" href="#">Importing Historical Data</a><a class="link-2" href="#">Download User Profiles</a><a class="link-2" href="#">Download Profiles by ID</a><a class="link-2" href="#">Uploading User Profiles</a><a class="link-2" href="#">Import Device Tokens</a><a class="link-2" href="#">Working with Counts API</a><a class="link-2" href="#">Event Counts API</a><a class="link-2" href="#">Profile Counts API</a><a class="link-2" href="#">Real-time Counts API</a><a class="link-2" href="#">Top Property Counts API</a><a class="link-2" href="#">Trends API</a>
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