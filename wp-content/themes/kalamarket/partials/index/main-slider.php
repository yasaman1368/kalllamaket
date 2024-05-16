  <!-- slider-main--------------------------->
  <div class="container-main">
      <div class="d-block">
          <!-- main crousel -->
          <?php get_template_part('partials/index/_main-slider-crousel') ?>
          <!-- adplacement--------------------------->
          <div class="col-lg-4 col-md-4 col-xs-12 pl mt-1">
              <div class="adplacement-container-column">
                  <a href="#" class="adplacement-item">
                      <div class="adplacement-sponsored-box">
                          <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-1.jpg">
                      </div>
                  </a>
                  <a href="#" class="adplacement-item">
                      <div class="adplacement-sponsored-box">
                          <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-2.jpg">
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 pr">
              <div class="adplacement-container-column mt-4">
                  <a href="#" class="adplacement-item img-banner">
                      <div class="adplacement-sponsored-box">
                          <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-3.jpg">
                      </div>
                  </a>
              </div>
          </div>
          <!-- adplacement--------------------------->
          <?php get_template_part('partials/index/_main-slider-amazing') ?>
          <!-- slider-amazing------------------------>
          <!-- slider-amazing------------------------>
      </div>
  </div>