<?php if (!empty($result)): ?>
<section class="padding-top padding-bottom contact-organization">
                    <div class="container"><h3 class="title-style-2">Our organization</h3>

                        <div class="row">
                            <div class="wrapper-organization">
                            <?php foreach ($result as $key => $value): ?>
                                <div class="col-md-4 col-sm-4 col-xs-4 md-organization">
                                    <div class="content-organization">
                                        <?php $src = image_style_url('profile',$value->field_workerprofile['und'][0]['filename']) ?>
                                        <div class="wrapper-img"><img src="<?php print $src;?>" alt="" class="img img-responsive"></div>
                                        <div class="main-organization">
                                            <div class="organization-title"><?php if (!empty($value->field_nameworker['und'][0]['value'])): ?><a href="#" class="title"><?php print $value->field_nameworker['und'][0]['value']; ?></a> <?php endif ?>

                                                   <?php if (!empty($value->field_work['und'][0]['value'])): ?>
                                                <p class="text"><?php print $value->field_work['und'][0]['value']; ?></p> <?php endif ?></div>
                                            <div class="content-widget">
                                                <div class="info-list">
                                                    <ul class="list-unstyled">
                                                          <?php if (!empty($value->field_adress['und'][0]['value'])): ?>
                                                        <li class="main-list"><i class="icons fa fa-map-marker"></i><a href="#" class="link">
                                                           <?php print $value->field_adress['und'][0]['value']; ?></a></li><?php endif ?>

                                                          <?php if (!empty($value->field_nphone['und'][0]['value'])): ?>   
                                                        <li class="main-list"><i class="icons fa fa-phone"></i><a href="#" class="link"><?php print $value->field_nphone['und'][0]['value']; ?></a></li><?php endif ?>
                                                         <?php if (!empty($value->field_nphone2['und'][0]['value'])): ?>   
                                                        <li class="main-list"><i class="icons fa fa-phone"></i><a href="#" class="link"><?php print $value->field_nphone2['und'][0]['value']; ?></a></li><?php endif ?>
                                                       
                                                          <?php if (!empty($value->field_wemail['und'][0]['value'])): ?>
                                                        <li class="main-list"><i class="icons fa fa-envelope-o"></i><a href="#" class="link"><?php print $value->field_wemail['und'][0]['value']; ?></a></li><?php endif ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          <?php endforeach ?> 
                               
                            </div>
                        </div>
                    </div>
                    
                </section>

                   <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>

            <?php endif ?>     