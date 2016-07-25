<div class="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php
            foreach ($ss as $i) {
              $node = node_load($i->nid);
//              print_r($node);
//              die();  
              $des = $node->body['und'][0]['value'];
//              echo $des;
//              die();
              $uri = file_create_url($node->field_slideshow_image['und'][0]['uri']);
              $name_submit = $node->field_slideshow_namesubmit['und'][0]['value'];
              ?>
              <li>
                  <div class="overlay"></div>
                  <img src="<?php echo $uri ?>" alt="">
                  <div class="slider-caption visible-md visible-lg">
                      <h2><?php echo $i->title ?></h2>
                      <p><?php echo $des ?></p>
                      <a href="#" class="slider-btn"><?php echo $name_submit ?></a>
                  </div>
              </li>
              <?php
            }
            ?>
        </ul>
    </div>
</div>  