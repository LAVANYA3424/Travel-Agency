 <?php if (!empty($result)): ?>        
            <section class="padding-top about-banner">
                    <div class="container"><h3 class="title-style-2">OUR INVESTORS RELATIONS</h3>

                        <div class="wrapper-banner">
                            <?php foreach ($result as $key => $value): ?>
                                <?php $src = image_style_url('sponseur',$value->field_sponimg['und'][0]['filename']) ?>
                            <div class="content-banner"><a href="#" class="img-banner"><img src="<?php print $src;?>" alt="" class="img-responsive"></a><a href="#" class="img-banner"><img src="<?php print $src;?>" alt="" class="img-responsive"></a></div>

                             <?php endforeach ?>
                        </div>
                    </div>
                </section>
 <?php endif; ?>               