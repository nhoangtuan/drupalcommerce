
<div class="row">
    <div class="heading-section col-md-12 text-center">
        <h2>Our Services</h2>
        <p>We make mobile ready websites for you</p>
    </div> 
    <?php
    foreach ($sv as $i) {
      $node = node_load($i->nid);
//      krumo($node);die;
      ?>
      <div class="col-md-3 col-sm-6">
          <div class="service-item" id="service-<?php echo $i->field_service_color1_value ?>">
              <div class="service-icon">
                  <i class="<?php echo $i->field_service_icon_value ?>"></i>
              </div> <!-- /.service-icon -->
              <div class="service-content">
                  <div class="inner-service">
                      <h3><?php echo $i->title ?></h3>
                      <p><?php echo $i->body_value ?></p>

                  </div>
              </div> <!-- /.service-content -->
          </div> <!-- /#service-1 -->
      </div> <!-- /.col-md-3 -->
      <?php
    }
    ?>
</div> 