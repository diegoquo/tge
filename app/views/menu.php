  <div class="nav-bar-b" data-ix="animate-on-load-b">
    <div class="container w-container">
      <div class="nav-bar-b-container">
        <div class="nav-bar-b-box-a">
          <a class="nav-bar-b-logo-container w-inline-block" href="#"><img class="nav-bar-b-logo" src="images/13x.png">
          </a>
          <div class="nav-bar-b-box-a-items-box">
            <div class="nav-bar-b-item-a"><a class="link-b" data-ix="trigger-nav-sub-bar-b" href="pricing.html">Pricing</a>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b">Features</div><img class="nav-bar-b-item-b-arrow-pic" src="images/13x_2.png">
              
              <div class="nav-bar-sub-menu-a">
                
                <div class="nav-bar-b-item-c" data-ix="close-nav-bar-item-a">
    
                  <div class="nav-bar-b-item-c-sub-item-a">
                   <?php foreach ($features_menu as $menu) { ?>
                    <a class="link-block-3 w-inline-block" href="<?= $menu->getLink('features_item.link')->getUrl($linkResolver) ?>">
                      <div class="nav-bar-icon-box-a">
                        <div class="icon-box-a"><img class="icon-pic-b" src="<?= $menu->getImage('features_item.menu_icon')->getUrl() ?>">
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
                  
                  <a class="nav-bar-b-item-c-sub-item-b w-inline-block" href="features.html">
                    <div class="nav-bar-b-item-c-sub-item-b-sub-item-a">
                      <div class="nav-bar-b-link-a">All features</div>
                      <div>Get line of credit with absolutely 0% interest forever.</div>
                    </div><img class="nav-bar-arrow-a" src="images/13x_1.png">
                  </a>
                
                </div>
              </div>
            </div>

            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b">Learn</div><img class="nav-bar-b-item-b-arrow-pic" src="images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  <a class="link-block-3 w-inline-block" href="company.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-press3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Company</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="blog-list.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-company3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Blog</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="press-list.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-blog3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Press</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b">Documentation</div><img class="nav-bar-b-item-b-arrow-pic" src="images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-dev-docs3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Dev-Docs</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-ios3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">IOS</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-android3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Android</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-sdk3x.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">SDK</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-profile-api3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Profile API</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-push-api3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Push API</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="documentation.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-events-api3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Events API</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b">User guide</div><img class="nav-bar-b-item-b-arrow-pic" src="images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-dashboard3x.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Dashboard</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-analytics3x.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Analytics</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-users3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Users</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-events3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Events</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-geo-distribution3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Geo-Distribution</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-funnel-and-segments3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Funnels &amp; segments</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-campaigns3x.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Campaigns</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="user-guide.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-dev-tools3x.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Dev-Tools</div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="nav-bar-b-item-b" data-ix="trigger-nav-sub-bar-a">
              <div class="link-b">Help</div><img class="nav-bar-b-item-b-arrow-pic" src="images/13x_2.png">
              <div class="nav-bar-sub-menu-a">
                <div class="nav-bar-b-item-b-box-a" data-ix="close-nav-bar-item-b">
                  <a class="link-block-3 w-inline-block" href="#">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-support3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Support</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="contact.html">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-contact-us3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Contact us</div>
                      </div>
                    </div>
                  </a>
                  <a class="link-block-3 w-inline-block" href="#">
                    <div class="nav-bar-icon-box-a">
                      <div class="icon-box-a"><img class="icon-pic-b" src="images/-community-3x_1.png">
                      </div>
                      <div class="nav-bar-icon-box-a-item-a">
                        <div class="nav-bar-link-b">Community</div>
                      </div>
                    </div>
                  </a>
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
          <div class="nav-bar-b-item-a"><a class="link-b" href="login.html">Login</a>
          </div><a class="button-a w-button" href="sign-up.html">Sign up</a>
        </div>
      </div>
    </div>

    <div class="menu-mobile">
      <div>
        <a class="menu-mobile-logo w-inline-block" href="#"><img class="mobile-menu-logo-pic" src="images/13x.png">
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
      <div class="mobile-close-button-box" data-ix="close-menu-mobile"><img class="mobile-menu-close-button" src="images/Group3x.png">
      </div>
    </div>
  </div>