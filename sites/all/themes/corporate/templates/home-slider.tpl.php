  <div id="slideshow">
    <div id="slides">
      <div class="slides_container">
  	<?php foreach ($slides as $k => $v): ?>
        <div class="homepage-slider-slide">
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
      <div class="slides_nav">
        <a href="#" class="prev"></a>
        <a href="#" class="next"></a>
      </div>
    </div>
  </div>