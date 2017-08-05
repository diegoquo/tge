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
$contac = $WPGLOBAL['contac'];

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
      <div class="container-j" data-ix="animate-on-load-b">
        <div class="section-hero-b-iem-a">
          <h1><?= $contac->getText('contac.title') ? $contac->getText('contac.title') : "Untitled" ?></h1>
        </div>
        <div class="section-hero-b-iem-a">
          <div class="p-big">
            <?= $contac->getText('contac.subtitle') ? $contac->getText('contac.subtitle') : "Untitled" ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-f" data-ix="animate-on-load-c">
    <div class="section-f-container-a">
      <div class="section-f-box-a" data-ix="animate-on-load-d">
        <h2><?= $contac->getText('contac.form_headline') ? $contac->getText('contac.form_headline') : "Untitled" ?></h2>
        <div class="section-f-form-block">
          <div class="w-form">
            <form data-name="Email Form" id="email-form" name="email-form">
              <div class="section-f-form-row-a">
                <div class="section-f-form-row-a-sub-row-a">
                  <label class="field-label" for="name-4">First name</label>
                  <input class="form-text-field-a w-input" data-name="Name 4" id="name-4" maxlength="256" name="name-4" placeholder="Enter your name" type="text">
                </div>
                <div class="section-f-form-row-a-sub-row-a">
                  <label class="field-label" for="name-5">Last name</label>
                  <input class="form-text-field-a w-input" data-name="Name 5" id="name-5" maxlength="256" name="name-5" placeholder="Enter your name" type="text">
                </div>
              </div>
              <div class="section-f-form-row-a">
                <div class="section-f-form-row-a-sub-row-a">
                  <label class="field-label" for="name-6">Phone</label>
                  <input class="form-text-field-a w-input" data-name="Name 6" id="name-6" maxlength="256" name="name-6" placeholder="Enter your name" type="text">
                </div>
                <div class="section-f-form-row-a-sub-row-a">
                  <label class="field-label" for="name-7">Company</label>
                  <input class="form-text-field-a w-input" data-name="Name 7" id="name-7" maxlength="256" name="name-7" placeholder="Enter your name" type="text">
                </div>
              </div>
              <div>
                <div>
                  <label class="field-label" for="name-8">Email address</label>
                  <input class="form-text-field-a w-input" data-name="Name 8" id="name-8" maxlength="256" name="name-8" placeholder="Enter your name" type="text">
                </div>
                <div>
                  <label class="field-label" for="name-9">Message</label>
                  <textarea class="form-text-area-a w-input" id="field" maxlength="5000" name="field" placeholder="Example Text"></textarea>
                </div>
              </div>
              <div class="form-button-block">
                <input class="button-b w-button" data-wait="Please wait..." type="submit" value="Send messages">
              </div>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-f-container-b">
      <div >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.5123630324115!2d78.39142081444894!3d17.43517430601526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb915a8b9e73e9%3A0xfeacfba76c501992!2sKavuri+Hills+Phase+1%2C+Masthan+Nagar%2C+Madhapur%2C+Hyderabad%2C+Telangana+500033%2C+India!5e0!3m2!1ses!2sve!4v1501955596679" width="600" height="780" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container w-container">
      <div class="container-o">
        <div class="container-m-item-a" data-ix="animate-on-scroll-b">
          <div class="container-m-item-a-sub-item-a">
            <h2>Reach us</h2>
          </div>
          <div class="container-m-item-a-sub-item-a">
            <div class="p-big"><strong>
            <?= $contac->getStructuredText("contac.reach_us")->asHtml($resolver); ?></strong>
            </div>
          </div>
          
        </div>
        <div class="container-m-item-a" data-ix="animate-on-scroll-c">
          <div class="container-m-item-a-sub-item-a">
            <h2><?= $contac->getText('contac.find_us_headline') ? $contac->getText('contac.find_us_headline') : "Untitled" ?></h2>
          </div>
          <div class="container-m-item-a-sub-item-a">
            <div><?= $contac->getText('contac.find_us') ? $contac->getText('contac.find_us') : "Untitled" ?></div>
          </div>
          <div class="container-m-item-a-sub-item-a">
            <h2><?= $contac->getText('contac.call_us') ? $contac->getText('contac.call_us') : "Untitled" ?></h2>
          </div>
          <div>
            <div class="p-big"><?= $contac->getText('contac.phone') ? $contac->getText('contac.phone') : "Untitled" ?></div>
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