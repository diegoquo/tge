  <div class="section-logos-a" data-ix="animate-on-scroll-a">
    <div class="container w-container">
      <div class="container-logos">
        <div class="section-logos-item-a">
          <div data-ix="animate-on-scroll-b">Our customers trust us</div>
        </div>

        <?php foreach ($clients as $client) { ?>
          <div class="section-logos-item-b" data-ix="animate-on-scroll-c">
          <img class="section-logos-pic-a" src="<?= $client->getImage('c.logo')->getUrl() ?>">
          </div>
        <?php } ?>

      </div>
    </div>
  </div>