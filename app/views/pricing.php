<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$clients = $WPGLOBAL['clients'];
$social_link = $WPGLOBAL['social_link'];
$features_items = $WPGLOBAL['features_items'];
$features_menu = $WPGLOBAL['features_menu'];
$menu_learn = $WPGLOBAL['menu_learn'];
$menu_doc = $WPGLOBAL['menu_doc'];
$menu_user_guide = $WPGLOBAL['menu_user_guide'];
$menu_help = $WPGLOBAL['menu_help'];
$general_content = $WPGLOBAL['general_content'];
$pri = $WPGLOBAL['pri'];


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
      <div class="section-hero-b-container-a" data-ix="animate-on-load-b">
        <div class="section-hero-b-iem-a">
          <h1>
          <?= $pri->getText('pri.headline') ? $pri->getText('pri.headline') : "Untitled" ?>
          </h1>
        </div>
        <div><?= $pri->getText('pri.description') ? $pri->getText('pri.description') : "Untitled" ?></div>
      </div>
    </div>
  </div>
  <div class="section-d">
    <div class="container w-container">
      <div class="container-f">
        <div class="container-f-item-a" data-ix="animate-on-load-c">
          <div class="container-f-item-a-sub-item-a">
            <img class="container-f-item-a-pic-a" src="<?= $pri->getImage("pri.pack_1_featured_pic")->getUrl() ?>">
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h4><?= $pri->getText('pri.pack_1_headline') ? $pri->getText('pri.pack_1_headline') : "Untitled" ?></h4>
            </div>
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div><?= $pri->getText('pri.pack_1_description') ? $pri->getText('pri.pack_1_description') : "Untitled" ?></div>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h3 class="container-f-headline-a"><?= $pri->getText('pri.pack_1_price') ? $pri->getText('pri.pack_1_price') : "Untitled" ?></h3>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div>
                <?= $pri->getStructuredText('pri.pack_1_features')->asHtml($resolver) ?>
              </div>
            </div>
            
          </div>
          <div class="container-f-item-a-sub-item-a">
          <a class="button-c w-button" href="#">
            <?= $pri->getText('pri.pack_1_button_line') ? $pri->getText('pri.pack_1_button_line') : "Untitled" ?>
          </a>
          </div>
        </div>
        <div class="container-f-item-a" data-ix="animate-on-load-d">
          <div class="container-f-item-a-sub-item-a"><img class="container-f-item-a-pic-a" src="<?= $pri->getImage("pri.pack_2_featured_pic")->getUrl() ?>">
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h4><?= $pri->getText('pri.pack_2_headline') ? $pri->getText('pri.pack_2_headline') : "Untitled" ?></h4>
            </div>
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div><?= $pri->getText('pri.pack_2_description') ? $pri->getText('pri.pack_2_description') : "Untitled" ?></div>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h3 class="container-f-headline-a"><?= $pri->getText('pri.pack_2_pricing') ? $pri->getText('pri.pack_2_pricing') : "Untitled" ?></h3>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div>
              <?= $pri->getStructuredText('pri.pack_2_features')->asHtml($resolver) ?>
              </div>
            </div>
            
          </div>
          <div class="container-f-item-a-sub-item-a"><a class="button-b w-button" href="#">Sign up</a>
          </div>
        </div>
        <div class="container-f-item-a" data-ix="animate-on-load-e">
          <div class="container-f-item-a-sub-item-a"><img class="container-f-item-a-pic-a" src="<?= $pri->getImage("pri.pack_3_featured_pic")->getUrl() ?>">
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h4><?= $pri->getText('pri.pack_3_headline') ? $pri->getText('pri.pack_3_headline') : "Untitled" ?></h4>
            </div>
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div><?= $pri->getText('pri.pack_3_headline') ? $pri->getText('pri.pack_3_headline') : "Untitled" ?></div>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <h3 class="container-f-headline-a"><?= $pri->getText('pri.pack_3_pricing') ? $pri->getText('pri.pack_3_pricing') : "Untitled" ?></h3>
            </div>
          </div>
          <div class="container-f-item-a-sub-item-a">
            <div class="container-f-item-a-sub-item-a-sub-item-a">
              <div>
              <?= $pri->getStructuredText('pri.pack_3_features')->asHtml($resolver) ?>
              </div>
            </div>
            
          </div>
          <div class="container-f-item-a-sub-item-a"><a class="button-b w-button" href="#">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container w-container">
      <div class="container-g" data-ix="animate-on-scroll-a">
        <div class="container-g-item-a-row-b">
          <h2>Details</h2>
        </div>
        <div class="container-g-item-a-row-a">
          <div class="container-g-p-a">Free</div>
        </div>
        <div class="container-g-item-a-row-a">
          <div class="container-g-p-a">Pro</div>
        </div>
        <div class="container-g-item-a-row-a">
          <div class="container-g-p-a">Entreprise</div>
        </div>
      </div>
      <div class="container-h">
        <div class="div-block">
          <div class="container-g-item-a-row-b">
            <div class="container-g-p-a">Data volume</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
      </div>
      <div class="container-h">
        <div class="div-block" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div class="container-g-p-a">Data volume</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
          <div class="container-g-item-a-row-a"><img class="container-g-check" src="images/13x_3.png">
          </div>
        </div>
      </div>
      <div class="container-h">
        <div class="div-block" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div class="container-g-p-a">Data volume</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
      </div>
      <div class="container-h">
        <div class="div-block" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div class="container-g-p-a">Data volume</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
      </div>
      <div class="container-h">
        <div class="div-block" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div class="container-g-p-a">Data volume</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
        <div class="container-g" data-ix="animate-on-scroll-a">
          <div class="container-g-item-a-row-b">
            <div>Events Per Month</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
          <div class="container-g-item-a-row-a">
            <div>Free up to 10 Million</div>
          </div>
        </div>
      </div>
      <div class="container-i">
        <div class="container-g-item-a-row-b">
          <h2 data-ix="animate-on-scroll-b">Get started for free!</h2>
        </div>
        <div class="container-g-item-a-row-c">
          <div class="container-g-item-a-row-d"><a class="button-c w-button" data-ix="animate-on-scroll-c" href="#">Sign up free</a>
          </div>
          <div class="container-g-item-a-row-d"><a class="button-b w-button" data-ix="animate-on-scroll-d" href="#">Sign up $333/mo</a>
          </div>
          <div class="container-g-item-a-row-d"><a class="button-b w-button" data-ix="animate-on-scroll-e" href="#">Sign up $333/mo</a>
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