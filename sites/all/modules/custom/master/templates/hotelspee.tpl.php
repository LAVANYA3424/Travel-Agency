
   <?php if (!empty($result)): ?>
           

                <div class="container" style="padding-bottom: 50PX;">
                           <div class="special-offer margin-top70"><h3 class="title-style-2"> Hôtels Disponible </h3>

                                <div class="special-offer-list">
                                    <?php foreach ($result as $key => $value): ?>
                                    <div class="special-offer-layout">
                                          <?php $src = image_style_url('offre',$value->field_imagehotel['und'][0]['filename']) ?>
                                        <div class="image-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="link"><img src="<?php print $src;?>" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="<?php print url('node/'.$value->nid) ; ?>" class="title"><?php print $value->title; ?></a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                  <?php endforeach ?>
                        
                                </div>
                     </div>    
                        </div>
                        
                 
            <!-- BUTTON BACK TO TOP-->
            <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
             
        

       <?php endif ?>