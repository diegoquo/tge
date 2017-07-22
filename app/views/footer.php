<div class="section-footer" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="mobile-menu-container-a">
        <div class="footer-container-box-a" data-ix="animate-on-scroll-b">
          <div class="footer-container-a-box-a-item-a">
            <a class="footer-logo-link-box w-inline-block" href="/"><img class="footer-logo-pic" src="/images/23x.png">
            </a>
          </div>
          <div class="footer-container-a-box-a-item-a">
            <div>
              <?= $general_content->getText('general_content.bottom_info') ? $general_content->getText('general_content.bottom_info') : "Untitled" ?>
            </div>
          </div>
          <div class="footer-container-a-box-a-item-a">
            <div><?= $general_content->getText('general_content.bottom_address') ? $general_content->getText('general_content.bottom_address') : "Untitled" ?></div>
          </div>
          <div class="footer-container-a-box-a-item-a">
            <div class="footer-headline">Follow us</div>
            <div>
 
             <?php foreach ($social_link as $soc) { ?>

              <a class="link-block-4 w-inline-block" href="<?= $soc->getLink('social_link.sociallink')->getUrl($linkResolver) ?>"><img src="<?= $soc->getImage('social_link.logo')->getUrl() ?>">
              </a>

              <?php } ?>
          
              </a>
            </div>
          </div>
        </div>
        <div class="footer-container-box-a" data-ix="animate-on-scroll-c">
          <div class="footer-container-a-box-a-item-a">
            <div class="footer-headline">Learn</div><a class="footer-link-a" href="/">TapGage</a><a class="footer-link-a" href="/pricing">Pricing</a><a class="footer-link-a" href="/company">Company</a><a class="footer-link-a" href="/blog-list">Blog</a><a class="footer-link-a" href="/press-list">Press</a>
          </div>
          <div class="footer-container-a-box-a-item-a">
            <div class="footer-headline">Support</div><a class="footer-link-a" href="#">Support</a><a class="footer-link-a" href="/contact">Contact us</a><a class="footer-link-a" href="#">Community</a>
          </div>
        </div>
        <div class="footer-container-box-a">
          <div class="footer-container-a-box-a-item-a" data-ix="animate-on-scroll-c">
            <div class="footer-headline">Discover</div><a class="footer-link-a" href="/all_features">Features</a><a class="footer-link-a" href="/analytics">Analytics</a><a class="footer-link-a" href="/users_profiles">User Profiles</a><a class="footer-link-a" href="/events">Events</a><a class="footer-link-a" href="/geo-distribution">Geo-distribution</a><a class="footer-link-a" href="/email-marketing">Email Messages</a><a class="footer-link-a" href="/funnels-and-segments">Funnels &amp; Segments</a><a class="footer-link-a" href="/campaigns">Campaigns</a><a class="footer-link-a" href="/in-app-notifications">In-app Notifications</a><a class="footer-link-a" href="/push-notifications">Push Notifications</a><a class="footer-link-a" href="/sms">Sms Messages</a>
          </div>
        </div>
        <div class="footer-container-box-a">
          <div class="footer-container-a-box-a-item-a" data-ix="animate-on-scroll-c">
            <div class="footer-headline">Documentation</div><a class="footer-link-a" href="/documentations/7">Dev Docs</a><a class="footer-link-a" href="/documentations/6">iOS</a><a class="footer-link-a" href="/documentations/2">Android</a><a class="footer-link-a" href="/documentations/3">SDK</a><a class="footer-link-a" href="/documentations/5">API</a><a class="footer-link-a" href="/documentations/4">Profile API</a><a class="footer-link-a" href="/documentations/5">Push API</a><a class="footer-link-a" href="/documentations/6">Events API</a>
          </div>
        </div>
        <div class="footer-container-box-a">
          <div class="footer-container-a-box-a-item-a" data-ix="animate-on-scroll-c">
            <div class="footer-headline">User guide</div><a class="footer-link-a" href="/user-guide/1">Dashboard</a><a class="footer-link-a" href="/user-guide/1">Analytics</a><a class="footer-link-a" href="/user-guide/2">Users</a><a class="footer-link-a" href="/user-guide/3">Events</a><a class="footer-link-a" href="/user-guide/4">Geo-distribution</a><a class="footer-link-a" href="/user-guide/5">Funnels &amp; Segments</a><a class="footer-link-a" href="/user-guide/6">Campaign</a><a class="footer-link-a" href="/user-guide/1">Dev Tools</a>
          </div>
        </div>
      </div>
      <div class="footer-container-b" data-ix="animate-on-scroll-d">
        <div class="footer-container-b-box-a" data-ix="animate-on-scroll-e">
          <div>
           <?= $general_content->getText('general_content.copyright') ? $general_content->getText('general_content.copyright') : "Untitled" ?>
          
          </div>
          <a class="footer-link-b" href="/terms-of-service">Terms of service</a>
          <a class="footer-link-b" href="/privacy-policy">Privacy Policy</a>
        </div>
        <div class="footer-container-b-box-b" data-ix="animate-on-scroll-e">
        <a class="footer-link-c" href="/login">
        <?= $general_content->getText('general_content.login_line') ? $general_content->getText('general_content.login_line') : "Untitled" ?>
        </a>
        <a class="button-a w-button" href="/sign-up">
        <?= $general_content->getText('general_content.sign_up_line') ? $general_content->getText('general_content.sign_up_line') : "Untitled" ?>
        </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>