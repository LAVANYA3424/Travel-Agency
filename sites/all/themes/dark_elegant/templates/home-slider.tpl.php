<div id="slider">
  <div class="flexslider">
    <ul class="slides">
    <?php foreach ($slides as $k => $v): ?>
        <li class="homepage-slider-slide">
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
           <a title="<?php print $title ; ?>" href="<?php print url($slide_url); ?>">
              <?php if (!empty($v->field_slide_image['und'][0]['uri'])): ?>
                <?php $src = image_style_url('slide_1600x500',$v->field_slide_image['und'][0]['uri']); ?>
                <img src="<?php print $src; ?>">
              <?php endif ?>
            </a>
              <div class="flex-caption">
                <h3><?php print $v->title ; ?></h3>
                  <?php if (!empty($v->field_subtitle['und'][0]['value'])): ?>
                  <div class="homepage-slide-caption"><?php print $v->field_subtitle['und'][0]['value']; ?></div>
                <?php endif ?>
              </div>
        </li>
    <?php endforeach ?>
  </ul>
</div>
</div>