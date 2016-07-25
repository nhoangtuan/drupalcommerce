
<div class="row">
    <?php
    foreach ($po as $item) {
      $node = node_load($item->nid);
      $uri = file_create_url($node->field_image['und'][0]['uri']);
      ?>
      <div class="portfolio-item col-md-3 col-sm-6">
          <div class="portfolio-thumb">
              <img src="<?php echo $uri ?>" alt="">
              <div class="portfolio-overlay">
                  <h3><?php echo $item->title ?></h3>
                  <p>Asperiores commodi illo fuga perferendis dolore repellendus sapiente ipsum.</p>
                  <a href="<?php echo $uri ?>" data-rel="lightbox" class="expand">
                      <i class="fa fa-search"></i>
                  </a>
              </div> <!-- /.portfolio-overlay -->
          </div> <!-- /.portfolio-thumb -->
      </div>
      <?php
    }
    ?>          
</div>
