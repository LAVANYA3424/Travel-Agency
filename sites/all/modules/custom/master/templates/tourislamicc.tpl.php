 <?php if (!empty($result)): ?>
    <section class="hotels padding-top padding-bottom">
                    <div class="container">
                        <div class="hotels-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text">TOURS ISLAMIC</p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title"> Hajj and Umrah </h2></div>
                            <div class="hotels-content margin-top70">
                                <div class="row hotels-list">
                                 <?php foreach ($result as $key => $value): ?>
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href=" <?php print url('node/'.$value->nid) ; ?> " class="link">
                                        <?php $src = image_style_url('sejour',$value->field_image['und'][0]['filename']) ?>

                                        <img src="<?php print $src;?>" alt="" class="img-responsive">

                                        </a>

                                                <div class="title-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="title"> <?php print $value->title; ?> </a>

                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><span class="number"><?php print $value->field_price['und'][0]['value']; ?> </span><sup>MAD</sup></span></div>
                                                        </div>
                                                    <p class="text"> <?php print $value->field_subtitle["und"][0]['value'] ;  ?></p>

                                                    <div class="group-btn-tours"><a href="<?php print url('node/'.$value->nid) ; ?>" class="left-btn">read more </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <?php endforeach ?>
                                
                        </div>
                    </div>
                </section>
<?php endif ?>


