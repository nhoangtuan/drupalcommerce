
<div class="col-md-4 col-sm-6">
    <?php
    foreach ($skill as $i) {
      ?>
      <ul class="progess-bars">
          <li>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $i->skill_number ?>%;"><?php echo $i->skill_name ?> <?php echo $i->skill_number ?>%</div>
              </div>
          </li>

      </ul>
      <?php
    }
    ?>
</div>