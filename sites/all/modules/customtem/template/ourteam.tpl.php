
<div class = "row">
    <?php
    foreach ($team as $item) {
      $node = node_load($item->nid);
      $fb = file_create_url($node->field_link_facebook['und'][0]['url']);
      $tw = file_create_url($node->field_link_twitter['und'][0]['url']);
      $li = file_create_url($node->field_link_linkedin['und'][0]['url']);
      $uri = file_create_url($node->field_image['und'][0]['uri']);
      ?>
      <div class = "team-member col-md-3 col-sm-6">
          <div class = "member-thumb">
              <img src = "<?php echo $uri ?>" alt = "">
              <div class = "team-overlay">
                  <h3><?php echo $item->title ?></h3>
                  <span><?php echo $item->name ?></span>
                  <ul class = "social">
                      <li><a href = "<?php echo $fb ?>" class = "fa fa-facebook"></a></li>
                      <li><a href = "<?php echo $tw ?>" class = "fa fa-twitter"></a></li>
                      <li><a href = "<?php echo $li ?>" class = "fa fa-linkedin"></a></li>
                  </ul>
              </div> <!--/.team-overlay -->
          </div> <!--/.member-thumb -->
      </div> <!--/.team-member -->
      <?php
    }
    ?>  
</div>

