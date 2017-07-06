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
                     src="<?= $feature->getImage("features_item.featured_image")->getUrl() ?>" />
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
                href="">Learn more</a>

              </div>
            </div>

            <?php } ?> 
           
          </div>
        </div>
      </div>
    </div>
  </div>
