<div id="featured-slider-wrap" class="clr">
  <div id="featured-slider" class="flexslider-container">
    <div class="flexslider">
      <ul class="slides">
    <?php foreach ($slides as $k => $v): ?>
        <li class="featured-slider-slide">
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
          <div class="featured-slider-img">
            <a title="<?php print $title ; ?>" href="<?php print url($slide_url); ?>">
              <?php if (!empty($v->field_slide_image['und'][0]['uri'])): ?>
                <?php $src = image_style_url('slide_1600x500',$v->field_slide_image['und'][0]['uri']); ?>
              <img src="<?php print $src; ?>">
            <?php endif ?>
            </a>
          </div>
          <article class="featured-slider-caption">
            <h2 class="featured-slider-caption-title">
              <a href="<?php print url($slide_url); ?>"><?php print $v->title; ?></a>
            </h2>
            <div class="featured-slider-caption-excerpt clr">
              <?php print $v->field_subtitle['und'][0]['value']; ?>
            </div>
          </article>
        </li>
    <?php endforeach ?>
  </ul>
</div>
</div>
</div>
 