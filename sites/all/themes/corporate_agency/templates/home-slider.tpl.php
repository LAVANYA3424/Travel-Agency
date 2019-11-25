<div class="home-slider">
    <div class="cycle-slideshow"
      data-cycle-caption-plugin='caption2' 
      data-cycle-slides="li" 
      data-cycle-fx='scrollHorz' 
      data-cycle-speed='700' 
      data-cycle-timeout='8000' 
      data-cycle-center-horz=true
      data-cycle-center-vert=true
      data-cycle-prev=".prev" 
      data-cycle-next=".next"   
      data-cycle-caption-template="<span class=stitle>{{ptitle}}</span><br><span class=stext>{{ptext}}</span> "      
      data-cycle-pause-on-hover="true" >
      <div class="cycle-caption custom"></div>
      <ul>


        <?php foreach ($slides as $k => $v): ?>
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
           
        <li <?php if($v->title): ?> data-cycle-ptitle="<?php print $v->title; ?>" <?php endif; ?>
            <?php if($v->field_subtitle['und'][0]['value']): ?> data-cycle-ptext="<?php print $v->field_subtitle['und'][0]['value']; ?>" <?php endif; ?>
            data-cycle-pmore="Read More" data-cycle-plink="<?php print url($slide_url); ?>">
          <a class="frmore" title="<?php print $title ; ?>" href="<?php print url($slide_url); ?>">
            <?php if (!empty($v->field_slide_image['und'][0]['uri'])): ?>
              <?php $src = image_style_url('slide_1600x500',$v->field_slide_image['und'][0]['uri']); ?>
              <img src="<?php print $src; ?>">
            <?php endif ?>
          </a>

        </li>
    <?php endforeach; ?>

      </ul>

      <div class="prev"></div>
      <div class="next"></div>

    </div>
  </div>