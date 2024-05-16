 <!-- slidre-product------------------------>
 <div class="container-main">
     <div class="d-block">
         <!-- owl slider prduct type A -->
         <?php get_template_part('partials/index/_slider-product-typeA') ?>
         <!-- slider-moment------------------------->
         <?php get_template_part('partials/index/_slider-product-moment-slider') ?>
         <!-- slider-moment------------------------->
         <!-- owl slider prduct type B -->
         <?php get_template_part('partials/index/_slider-product-typeB') ?>
         <!-- adplacement--------------------------->
         <div class="container-fluid">
             <div class="row">
                 <div class="adplacement-container-row">
                     <div class="col-6 col-lg-3 pr">
                         <a href="#" class="adplacement-item">
                             <div class="adplacement-sponsored_box">
                                 <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-4.jpg">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3 pr">
                         <a href="#" class="adplacement-item">
                             <div class="adplacement-sponsored_box">
                                 <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-5.jpg">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3 pr">
                         <a href="#" class="adplacement-item">
                             <div class="adplacement-sponsored_box">
                                 <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-6.jpg">
                             </div>
                         </a>
                     </div>
                     <div class="col-6 col-lg-3 pr">
                         <a href="#" class="adplacement-item">
                             <div class="adplacement-sponsored_box">
                                 <img src="<?php echo  get_template_directory_uri() ?>/assets/images/adplacement/a-7.jpg">
                             </div>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- adplacement--------------------------->
         <!-- owl slider prduct type C&D -->
         <?php get_template_part('partials/index/_slider-product-typeC&D') ?>
         <!-- brand--------------------------------------->
         <?php get_template_part('partials/index/_slider-product-brand') ?>
         <!-- brand----------------------------------------->
     </div>
 </div>