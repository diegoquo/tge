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
$blog_item = $WPGLOBAL['blog_item'];


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

  <div class="blog-section-a" data-ix="animate-on-load-a">
    <div class="container w-container">
      <div class="block-container-a">
        <div class="blog-item-a">
          <h1>The best engagement articles every day</h1>
        </div>
        <div>
          <div class="p-big">Have questions about plans &amp; pricing or want to see a demo?</div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="blog-section-b" data-ix="animate-on-load-b">
    <div class="container w-container">
      <?php
       $c=1; 
       foreach ($blog_item as $post) { 
        if ($c == 1){
          $c=2;
      ?>
      <div class="blog-container-a">
        <div class="blog-list-box-a">
          <a class="blog-list-box-item-a w-inline-block" href="#"></a>
          <div class="blog-list-box-item-b">
            <div class="blog-list-box-item-b-sub-item-a">
              <div class="blog-tag">
                <div>Blog</div>
              </div>
            </div><a class="blog-list-box-item-b-sub-item-a w-inline-block" href="#"><h2>
            <?= $post->getText('blog_item.headine') ? $post->getText('blog_item.headine') : "Untitled" ?></h2></a>
            <div class="blog-list-box-item-b-sub-item-a">
              <div class="blog-author-box">
                <div class="blog-author-pic"></div>
                <div><?= $post->getText('blog_item.author_name') ? $post->getText('blog_item.author_name') : "Untitled" ?></div>
              </div>
            </div>
            <div class="blog-list-box-item-b-sub-item-a">
              <div>
                  <div><?= $post->getText('blog_item.description') ? $post->getText('blog_item.description') : "Untitled" ?></div>
              </div>
            </div>
            <div class="blog-list-box-item-b-sub-item-b"><a class="button-b w-button" href="/blog_post/<?= $post->getUid() ?>">Read more</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="blog-container-a">

      <?php } else { ?>

      
        
        <div class="blog-list-block-b">
          <a class="link-block w-inline-block" href="#"></a>
          <div class="div-block-9"><a class="blog-list-box-item-b-sub-item-a w-inline-block" href="#"><h3><?= $post->getText('blog_item.headine') ? $post->getText('blog_item.headine') : "Untitled" ?></h3></a>
            <div class="blog-list-box-item-b-sub-item-a">
              <div class="blog-author-box">
                <div class="blog-author-pic"></div>
                <div><?= $post->getText('blog_item.author_name') ? $post->getText('blog_item.author_name') : "Untitled" ?></div>
              </div>
            </div>
            <div class="blog-list-box-item-b-sub-item-a">
              <div>
                <?= $post->getText('blog_item.description') ? $post->getText('blog_item.description') : "Untitled" ?>
              </div>
            </div>
            <div class="blog-list-box-item-b-sub-item-b"><a class="button-b w-button" href="/blog_post/<?= $post->getUid() ?>">Read more</a>
            </div>
          </div>
        </div>
      
      <?php } } ?>    
      
      </div>

    </div>
  </div>
    



  <div class="section-a">
    <div class="container w-container">
      <div class="blog-container-b">
        <a class="blog-container-b-box-a w-inline-block" href="#"><img class="blog-container-b-arrow-a" src="images/arrow3x.png">
          <h3>Previous</h3>
        </a>
        <a class="blog-container-b-box-b w-inline-block" href="#"><img class="blog-container-b-arrow-b" src="images/arrow3x.png">
          <h3>Next</h3>
        </a>
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