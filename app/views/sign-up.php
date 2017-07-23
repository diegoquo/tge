<?php

$prismic = $WPGLOBAL['prismic'];
if (isset($WPGLOBAL['pageContent'])) {
  $pageContent = $WPGLOBAL['pageContent'];
}

$sign_up = $WPGLOBAL['sign_up'];

$cont = 0;

$title = "TODO";

?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Jun 26 2017 15:10:19 GMT+0000 (UTC)  -->
<html data-wf-page="59332c7039f29a0ae74ce60e" data-wf-site="5930669e1b4da30f46508724">
<head>
  <meta charset="utf-8">
  <title>Sign up | TapGage</title>
  <meta content="Sign up | TapGage" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/tapgage.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Hind Vadodara:300,regular,500,600,700"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="login-section-a">
    <div class="login-section-a-container-a login-section-a-container-a-alternative-a" data-ix="animate-on-load-a">
      <div class="login-section-a-logo"><img class="login-section-a-logo-pic-a" src="images/13x.png">
      </div><img class="image-11" sizes="(max-width: 767px) 100vw, 35vw" src="images/Asset-33x.png" srcset="images/Asset-33x-p-500.png 500w, images/Asset-33x-p-800.png 800w, images/Asset-33x-p-1080.png 1080w, images/Asset-33x-p-1600.png 1600w, images/Asset-33x-p-2000.png 2000w, images/Asset-33x.png 2235w" width="450">
      <div class="div-block-24">
        <div class="login-section-a-container-a-box-a">
          <div>Mobile App Analytics &amp; Engagement. Simplified.</div>
        </div>
        <div class="login-section-a-container-a-box-a">
          <div>Tapgage helps you get to know your users, analyze your audience, and engage with them. All at the same time.</div>
        </div>
        <div class="login-section-a-container-a-box-b">
          <div class="login-section-a-container-a-box-b-item-b">
            <div>Trusted by the greatest companies</div>
          </div>
          <div class="login-section-a-container-a-box-b-item-a"><img class="image-10" src="images/TapGage-customer-a3x.png"><img class="image-10" src="images/TapGage-customer-c3x.png"><img class="image-10" src="images/TapGage-customer-b3x.png">
          </div>
        </div>
      </div>
    </div>
    <div class="login-section-a-container-b" data-ix="animate-on-load-c">
      <div class="login-container-b-box-a">
        <a class="back1" href="javascript:history.back()">
        <div class="login-close-button w-embed">
        </div>
        </a>
        <div class="login-container-box-a-item-a">
          <div class="ogin-container-box-a-item-b">
            <div>
            <?= $sign_up->getText('sign_up.already_have_account_line') ? $sign_up->getText('sign_up.already_have_account_line') : "Untitled" ?></div>
          </div><a class="button-a w-button" href="/login">
            <?= $sign_up->getText('sign_up.login_button_line') ? $sign_up->getText('sign_up.login_button_line') : "Untitled" ?>
          </a>
        </div>
      </div>
      <div class="login-section-a-container-b-box-a" data-ix="animate-on-load-b">
        <div class="login-section-a-item-b">
          <h2><?= $sign_up->getText('sign_up.title') ? $sign_up->getText('sign_up.title') : "Untitled" ?></h2>
        </div>
        <div class="login-section-a-item-b">
          <div class="p-big"><?= $sign_up->getText('sign_up.description') ? $sign_up->getText('sign_up.description') : "Untitled" ?></div>
        </div>
        <div class="login-section-a-container-b-box-b">
          <div class="w-form">
            <form data-name="Email Form" id="email-form" name="email-form">
              <label class="field-label" for="name">
                <?= $sign_up->getText('sign_up.form_name_line') ? $sign_up->getText('sign_up.form_name_line') : "Untitled" ?>
              </label>
              <input class="form-text-field-a w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Name" type="text">
              <label class="field-label" for="Email-2">
                <?= $sign_up->getText('sign_up.form_email_line') ? $sign_up->getText('sign_up.form_email_line') : "Untitled" ?>
              </label>
              <input class="form-text-field-a w-input" data-name="Email" id="Email-2" maxlength="256" name="Email" placeholder="Email" type="text">
              <div class="div-block-20">
                <label class="field-label" for="email">
                  <?= $sign_up->getText('sign_up.form_password_line') ? $sign_up->getText('sign_up.form_password_line') : "Untitled" ?>
                </label>
              </div>
              <input class="form-text-field-a form-text-field-a-variation-a w-input" data-name="Password" id="Password" maxlength="256" name="Password" placeholder="Password" required="required" type="password">
              <div class="login-section-form-item-a">
                <input class="button-c button-c-variation-a w-button" data-wait="Please wait..." type="submit" value="Sign up for a free account">
              </div>
              <div class="login-section-form-item-b">
                <div><?= $sign_up->getText('sign_up.terms_and_conditions_line') ? $sign_up->getText('sign_up.terms_and_conditions_line') : "Untitled" ?></a>.</div>
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
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>