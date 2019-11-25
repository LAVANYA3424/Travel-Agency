<div class="featured-slider">
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

                       <div class="featured-text"><?php print $v->title ; ?>
              <?php if (!empty($v->field_subtitle['und'][0]['value'])): ?>
                <div class="homepage-slide-caption"><?php print $v->field_subtitle['und'][0]['value']; ?></div>
              <?php endif ?>
            </div>
        <div class="featured">
          <div class="slide-image">
                <span class="img-effect pngfix"></span>
                <?php if (!empty($v->field_slide_image['und'][0]['uri'])): ?>
                <?php $src = image_style_url('slide_1600x500',$v->field_slide_image['und'][0]['uri']); ?>
                <img width="976"src="<?php print $src ; ?>" class="pngfix"/>
                <?php endif ?>
          </div> <!-- .slide-image -->
        </div> <!-- .featured -->

      </div> <!-- .slides -->
    <?php endforeach ?>
</div>
<div id="controllers"></div><!-- #controllers --> 