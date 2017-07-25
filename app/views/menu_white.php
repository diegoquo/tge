   <div class="bar-b-white-variation nav-bar-b">
    <div class="container w-container">
      <div class="nav-bar-b-container">
        <div class="nav-bar-b-box-a">
          <a class="nav-bar-b-logo-container w-inline-block" href="/"><img class="nav-bar-b-logo" src="/images/23x.png">
          </a>
          </a>
          <div class="nav-bar-b-box-a-items-box">
            <div class="nav-bar-b-item-a"><a class="link-b link-b-black-variation" href="/pricing">Pricing</a>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b link-b-black-variation">Features</div><img class="nav-bar-b-item-b-arrow-pic nav-bar-b-item-b-arrow-pic-black-variation" src="/images/13x_2.png">
              
              <div class="nav-bar-sub-menu-a">
                
                <div class="nav-bar-b-item-c" data-ix="close-nav-bar-item-a">
    
                  <div class="nav-bar-b-item-c-sub-item-a">
                   <?php foreach ($features_menu as $menu) { ?>
                    <a class="link-block-3 w-inline-block" href="<?= $menu->getLink('features_item.link')->getUrl($linkResolver) ?>">
                      <div class="nav-bar-icon-box-a">
                        <div class="icon-box-a">
                        <img class="icon-pic-b" src="<?= $menu->getImage('features_item.menu_icon')->getUrl() ?>">
                        </div>
                        <div class="nav-bar-icon-box-a-item-a">
                          <div class="nav-bar-link-b">
                            <?= $menu->getText('features_item.title') ? $menu->getText('features_item.title') : "Untitled" ?>
                          </div>
                          <div>
                            <?= $menu->getText('features_item.menu_description') ? $menu->getText('features_item.menu_description') : "Untitled" ?>
                          </div>
                        </div>
                      </div>
                    </a>
                    <?php } ?>
                  
                  </div>
                  
                  <a class="nav-bar-b-item-c-sub-item-b w-inline-block" href="all_features">
                    <div class="nav-bar-b-item-c-sub-item-b-sub-item-a">
                      <div class="nav-bar-b-link-a">All features</div>
                      <div>Get line of credit with absolutely 0% interest forever.</div>
                    </div><img class="nav-bar-arrow-a" src="/images/13x_1.png">
                  </a>
                
                </div>
              </div>
            </div>

            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b link-b-black-variation">Learn</div><img class="nav-bar-b-item-b-arrow-pic nav-bar-b-item-b-arrow-pic-black-variation" src="/images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  
                  <?php foreach ($menu_learn as $mnu_learn) { ?>
                  <a class="link-block-3 w-inline-block" 
                     href="<?= $mnu_learn->getLink('menu_learn.menu_link')->getUrl($linkResolver) ?>" />
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" 
                           src="<?= $mnu_learn->getImage('menu_learn.menu_icon')->getUrl() ?>" />
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">
                          <?= $mnu_learn->getText('menu_learn.menu_title') ? $mnu_learn->getText('menu_learn.menu_title') : "Untitled" ?>
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php } ?>

                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
             <div class="link-b link-b-black-variation">Documentation</div><img class="nav-bar-b-item-b-arrow-pic nav-bar-b-item-b-arrow-pic-black-variation" src="/images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  
                  <?php foreach ($menu_doc as $mnu_doc) { ?>
                  <a class="link-block-3 w-inline-block" href="<?= $mnu_doc->getLink('menu_doc.menu_link')->getUrl($linkResolver) ?>">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" 
                           src="<?= $mnu_doc->getImage('menu_doc.menu_icon')->getUrl() ?>">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">
                          <?= $mnu_doc->getText('menu_doc.menu_title') ? $mnu_doc->getText('menu_doc.menu_title') : "Untitled" ?>
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php } ?>
                  
                
                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b link-b-black-variation">User guide</div><img class="nav-bar-b-item-b-arrow-pic nav-bar-b-item-b-arrow-pic-black-variation" src="/images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  
                  <?php foreach ($menu_user_guide as $mnu_doc) { ?>
                  <a class="link-block-3 w-inline-block" href="<?= $mnu_doc->getLink('menu_user_guide.menu_link')->getUrl($linkResolver) ?>">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" 
                      src="<?= $mnu_doc->getImage('menu_user_guide.menu_icon')->getUrl() ?>">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">
                        <?= $mnu_doc->getText('menu_user_guide.menu_title') ? $mnu_doc->getText('menu_user_guide.menu_title') : "Untitled" ?>
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php } ?>
                  
                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b link-b-black-variation">Help</div><img class="nav-bar-b-item-b-arrow-pic nav-bar-b-item-b-arrow-pic-black-variation" src="/images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  
                  <?php foreach ($menu_help as $mnu_doc) { ?>
                  <a class="link-block-3 w-inline-block" href="<?= $mnu_doc->getLink('menu_help.menu_link')->getUrl($linkResolver) ?>">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a">
                        <img class="icon-pic-b" 
                             src="<?= $mnu_doc->getImage('menu_help.menu_icon')->getUrl() ?>">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">

                        <?= $mnu_doc->getText('menu_help.menu_title') ? $mnu_doc->getText('menu_help.menu_title') : "Untitled" ?>
      
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>
          <a class="nav-bar-menu-button w-inline-block" data-ix="trigger-mobile-menu" href="#">
            <div class="menu-button-bar-a"></div>
            <div class="menu-button-bar-b"></div>
            <div class="menu-button-bar-c"></div>
          </a>
        </div>
        <div class="nav-bar-b-box-b">
          <div class="nav-bar-b-item-a"><a class="link-b link-b-black-variation" href="/login">Login</a>
          </div><a class="button-a w-button" href="/sign-up">Sign up</a>
        </div>
      </div>
    </div>

    <div class="menu-mobile">
      <div>
        <a class="menu-mobile-logo w-inline-block" href="#"><img class="mobile-menu-logo-pic" src="/images/13x.png">
        </a>
        <div class="mobile-menu-box-a">
          <div class="mobile-menu-item-a">
            <div class="mobile-menu-link-a">Learn</div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">TapGage</a><a class="mobile-menu-link-b" href="#">Pricing</a><a class="mobile-menu-link-b" href="#">Company</a><a class="mobile-menu-link-b" href="#">Blog</a><a class="mobile-menu-link-b" href="#">Press</a>
            </div>
            <div class="mobile-menu-item-a-sub-item-a">
              <div class="mobile-menu-link-a">Help</div>
            </div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">Support</a><a class="mobile-menu-link-b" href="#">Contact us</a><a class="mobile-menu-link-b" href="#">Comunity</a>
            </div>
          </div>
          <div class="mobile-menu-item-a">
            <div class="mobile-menu-link-a">Features</div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">Features</a><a class="mobile-menu-link-b" href="#">Analytics</a><a class="mobile-menu-link-b" href="#">User Profiles</a><a class="mobile-menu-link-b" href="#">Events</a><a class="mobile-menu-link-b" href="#">Geo-distribution</a><a class="mobile-menu-link-b" href="#">Email Messages</a><a class="mobile-menu-link-b" href="#">Funnels &amp; Segments</a><a class="mobile-menu-link-b" href="#">Campaigns</a><a class="mobile-menu-link-b" href="#">In-app Notifications</a><a class="mobile-menu-link-b" href="#">Push Notifications</a><a class="mobile-menu-link-b" href="#">Sms Messages</a>
            </div>
          </div>
          <div class="mobile-menu-item-a">
            <div class="mobile-menu-link-a">Documentation</div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">Dev Docs</a><a class="mobile-menu-link-b" href="#">IOS</a><a class="mobile-menu-link-b" href="#">Android</a><a class="mobile-menu-link-b" href="#">SDK</a><a class="mobile-menu-link-b" href="#">API</a><a class="mobile-menu-link-b" href="#">Profile API</a><a class="mobile-menu-link-b" href="#">Push API</a><a class="mobile-menu-link-b" href="#">Events API</a>
            </div>
          </div>
          <div class="mobile-menu-item-a">
            <div class="mobile-menu-link-a">Users guide</div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">Dashboard</a><a class="mobile-menu-link-b" href="#">Analytics</a><a class="mobile-menu-link-b" href="#">Users</a><a class="mobile-menu-link-b" href="#">Events</a><a class="mobile-menu-link-b" href="#">Geo-distribution</a><a class="mobile-menu-link-b" href="#">Funnels and segments</a><a class="mobile-menu-link-b" href="#">Campaign</a><a class="mobile-menu-link-b" href="#">Dev tools</a>
            </div>
          </div>
        </div>
        <div class="mobile-menu-box-a">
          <div class="mobile-menu-item-a">
            <div class="mobile-menu-link-a">More</div>
            <div class="mobile-menu-item-a-sub-item-a"><a class="mobile-menu-link-b" href="#">Login</a><a class="mobile-menu-link-b" href="#">Sign up</a><a class="mobile-menu-link-b" href="#">Terms of service</a><a class="mobile-menu-link-b" href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
      <div class="mobile-close-button-box" data-ix="close-menu-mobile"><img class="mobile-menu-close-button" src="/images/Group3x.png">
      </div>
    </div>
  </div>