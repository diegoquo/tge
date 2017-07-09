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
$post = $WPGLOBAL['post'];

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
      <div class="container-j">
        <div class="section-hero-b-iem-a">
          <h1 data-ix="animate-on-load-b">
            <?= $post->getText('blog_item.headine') ? $post->getText('blog_item.headine') : "Untitled" ?>
          </h1>
        </div>

        <div class="blog-author-box">
          <div class="blog-author-pic"></div>
          <div>
          <?= $post->getText('blog_item.author_name') ? $post->getText('blog_item.author_name') : "Untitled" ?>
          <?= $post->getText('blog_item.date') ? $post->getText('blog_item.date') : "Untitled" ?>
            
          </div>
        </div>
        <br><br>

        <div>
        <img 
             src="<?= $post->getImage("blog_item.hero_pic")->getUrl() ?>" />
        </div>

        <div class="section-hero-b-iem-a" data-ix="animate-on-load-c">
          <div class="p-big">
            <?= $post->getText('blog_item.description') ? $post->getText('blog_item.description') : "Untitled" ?>
          </div>
        </div>
        <div class="section-hero-b-iem-a" data-ix="animate-on-load-d">
          <div class="p-big">
            <?= $post->getStructuredText("blog_item.content")->asHtml($resolver); ?>
          </div>
        </div>

        <div class="blog-list-box-item-b-sub-item-b"><a class="button-b w-button" href="/blog-list">Back to list</a>
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