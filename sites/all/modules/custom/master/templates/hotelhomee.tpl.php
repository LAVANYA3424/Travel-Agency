                        
 <?php if (!empty($result)): ?>
    <section class="hotels padding-top padding-bottom">
                    <div class="container">
                        <div class="hotels-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text">GUARANTEED QUALITY</p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title">Recommended Hotels</h2></div>
                            <div class="hotels-content margin-top70">
                                <div class="row hotels-list">
                                 <?php foreach ($result as $key => $value): ?>
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href=" <?php print url('node/'.$value->nid) ; ?> " class="link">
                                        <?php $src = image_style_url('hotel',$value->field_imagehotel['und'][0]['filename']) ?>
                                        <img src="<?php print $src;?>" alt="" class="img-responsive">

                                        </a>

                                                <div class="title-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="title"> <?php print $value->title; ?> </a>

                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">

                                                          <?php if (!empty($value->field_pricehotel['und'][0]['value'])): ?>
                                                        <div class="price"><span class="number"><?php print $value->field_pricehotel['und'][0]['value']; ?> </span><sup>MAD</sup></span></div>
                                                        </div> <?php endif ?>




                                                       <?php if (!empty($value->field_subtitle1['und'][0]['value'])): ?> 
                                                    <p class="text"> <?php print $value->field_subtitle1["und"][0]['value'] ;  ?></p> <?php endif ?>

                                                    <div class="group-btn-tours"><a href="<?php print url('node/'.$value->nid) ; ?>" class="left-btn">read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <?php endforeach ?>
                                
                        </div>
                        <a href="<?php print url('/hotel') ; ?>" class="btn btn-transparent margin-top70">more hotels</a></div>
                        </div>
                    </div>
                </section>
<?php endif ?>