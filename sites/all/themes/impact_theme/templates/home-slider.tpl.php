
<div id="slider">
  <div id="slider-wrap">
    <?php foreach ($slides as $k => $v): ?>
        <div class="slides displayblock">
          <?php 
            $slide_url = '<front>' ;
            $slide_title = '' ;
            if (!empty($v->field_link['und'][0]['url'])) {
          $slide_url = $v->field_link['und'][0]['url'];
             }
             if (!empty($v->field_link['und'][0]['title'])) {
              $title = $v->field_link['und'][0]['title'];
             }
           ?>

           <a href="<?php print url($slide1_url); ?>">
            <img src="<?php print $src; ?>" class="pngfix"/>
          </a>
              <?php
              if($slide1_desc) {
                    print '<div class="featured-text">' . $slide1_desc . '</div>';
                }
              ?>
            

          <a title="<?php print $title ; ?>" href="<?php print url($slide_url); ?>">
            <div class="homepage-slide-inner container">
              <div class="homepage-slide-content">
                <div class="homepage-slide-title"><?php print $v->title ; ?></div>
                <div class="clr" ></div>
                <?php if (!empty($v->field_subtitle['und'][0]['value'])): ?>
                  <div class="homepage-slide-caption"><?php print $v->field_subtitle['und'][0]['value']; ?></div>
                <?php endif ?>
              </div>
            </div>
            <?php if (!empty($v->field_slide_image['und'][0]['uri'])): ?>
              <?php $src = image_style_url('slide_1600x500',$v->field_slide_image['und'][0]['uri']); ?>
              <img src="<?php print $src; ?>">
            <?php endif ?>
          </a>
        </div>
    <?php endforeach ?>
</div>
</div>

        <div id="slider">
          <div id="slider-wrap">
            <div class="slides displayblock">
              <a href="<?php print url($slide1_url); ?>"><img width="644" height="320" src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/images/slide-image-1.jpg'; ?>" class="pngfix"/></a>
              <?php if($slide1_desc) { print '<div class="featured-text">' . $slide1_desc . '</div>'; } ?><!-- .featured-text -->
            </div> <!-- .slides -->

            <div class="slides displaynone">
              <a href="<?php print url($slide2_url); ?>"><img width="644" height="320" src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/images/slide-image-2.jpg'; ?>" class="pngfix"/></a>
              <?php if($slide1_desc) { print '<div class="featured-text">' . $slide2_desc . '</div>'; } ?><!-- .featured-text -->
            </div> <!-- .slides -->

            <div class="slides displaynone">
              <a href="<?php print url($slide3_url); ?>"><img width="644" height="320" src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/images/slide-image-3.jpg'; ?>" class="pngfix"/></a>
              <?php if($slide1_desc) { print '<div class="featured-text">' . $slide3_desc . '</div>'; } ?><!-- .featured-text -->
            </div> <!-- .slides -->
          </div>
          <div id="nav-slider">
            <div class="nav-previous"><img class="pngfix" src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/images/previous.png'; ?>" alt="next slide"></div>
            <div class="nav-next"><img class="pngfix" src="<?php print base_path() . drupal_get_path('theme', 'impact_theme') . '/images/next.png'; ?>" alt="next slide"></div>
          </div>
        </div>