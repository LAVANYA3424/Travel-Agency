<?php if (!empty($result)): ?>
<section class="travelers">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="traveler-wrapper padding-top padding-bottom">
                                    <div class="group-title white">
                                        <div class="sub-title"><p class="text">RELAX AND ENJOY</p><i class="icons flaticon-people"></i></div>
                                        <h2 class="main-title">happy traveler</h2></div>
                                </div>
                     </div>
                        <div class="col-md-8">
                            <div class="traveler-list">
                             <?php foreach ($result as $key => $value): ?>
                                 <div class="traveler">

                                   <?php $src = image_style_url('backimage',$value->field_backimage['und'][0]['filename']) ?>
                                        <div class="cover-image"><img src="<?php print $src;?>" alt=""></div>
                                        <div class="wrapper-content">
                                     
                                   <?php $src1 = image_style_url('profile',$value->field_profile['und'][0]['filename']) ?>
                                        <div class="avatar"><img src="<?php print $src1;?>" alt="" class="img-responsive"></div>
                                         
                                          <?php if (!empty($value->field_first_last_name['und'][0]['value'])): ?>
                                            <p class="name"><?php print $value->field_first_last_name['und'][0]['value']; ?></p>
                                          <?php endif ?>

                                          <?php if (!empty($value->field_location['und'][0]['value'])): ?>
                                            <p class="address"><?php print $value->field_location['und'][0]['value']; ?></p>
                                          <?php endif ?>

                                          <?php if (!empty($value->field_desc['und'][0]['value'])): ?>
                                            <p class="description">  <?php print $value->field_desc['und'][0]['value']; ?></p>
                                          <?php endif ?>
                                            </div>
                                         
                                 </div>
                                 
                                    <?php endforeach ?>
                            </div>
                        </div>
                        </div>
                    </div>
                       <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
              
    </section>
       <?php endif ?>