

  <?php if (!empty($result)): ?>
    
    <section class="tours padding-top padding-bottom">
                    <div class="container">
                        <div class="tours-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text"> Voyages islamic </p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title">hajj_omra </h2></div>
                            <div class="tours-content margin-top70">
                                <div class="tours-list">
                                    <?php foreach ($result as $key => $value): ?>
                                    <div class="tours-layout">
                                         <?php $src = image_style_url('sejour',$value->field_image['und'][0]['filename']) ?>
                                        <div class="image-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="link"><img src="<?php print $src;?>" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="title"><?php print $value->title; ?></a><i class="icons flaticon-circle"></i></div>
                                            
                                        </div>
                                        <div class="content-wrapper">
                                           
                                            <div class="content">
                                                <div class="title">
                                                    <div class="price"><sup>MAD</sup><span class="number"><?php print $value->field_price['und'][0]['value']; ?> </span></div>
                                                    </div>
                                                <p class="text"> <?php print $value->field_subtitle["und"][0]['value'] ;  ?></p>

                                                <div class="group-btn-tours"><a href="<?php print url('node/'.$value->nid) ; ?>" class="left-btn">  voir</a><a href="<?php print url('node/'.$value->nid) ; ?>" class="right-btn"> plus</a></div>
                                            </div>
                                        </div>
                                    </div>
                                     <?php endforeach ?>
                                  
                                  
                                </div>
                                <a href="<?php print url('/tourislamic') ; ?>" class="btn btn-transparent margin-top70">plus </a></div>
                        </div>
                    </div>
                </section>

             <?php endif ?>   