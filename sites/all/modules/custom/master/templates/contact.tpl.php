<?php if (!empty($data)): ?>  

      <div class="footer-main padding-top padding-bottom">
      <div class="container">
                    <div class="footer-main-wrapper"><a href="index-2.html" class="logo-footer"><img src="<?php print $data['logo'] ; ?>" alt="" class="img-responsive"/></a>

                      <div class="row">
                      <div class="col-2">
                  
                                     <div class="col-md-3 col-xs-5">
                                    <div class="contact-us-widget widget">
                                        <div class="title-widget">Agence Sale</div>
                                        <div class="content-widget">
                                          <div class="info-list">
                                                <ul class="list-unstyled">
                                                    <li><i class="icons fa fa-map-marker"></i><a href="https://www.google.com/maps/place/Favori+Voyages+Sarl/@33.5940849,-7.6370418,15z/data=!4m5!3m4!1s0x0:0x39002c6623de75b3!8m2!3d33.5938863!4d-7.6383293" class="link"><?php if (!empty($data['address'])): ?> <span class="label">  <?php print $data['address'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-phone"></i><a href="#" class="link"><?php if (!empty($data['phone2'])): ?><?php print $data['phone2'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-phone"></i><a href="#" class="link"><?php if (!empty($data['phone1'])): ?><?php print $data['phone1'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-fax"></i><a href="#" class="link">FAX : <?php if (!empty($data['fax'])): ?><?php print $data['fax'] ; ?><br> <?php endif ?></a></li>

                                                    <li><i class="icons fa fa-envelope-o"></i><a href="#" class="link"><?php if (!empty($data['email'])): ?>  <?php print $data['email'] ; ?><br> <?php endif ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    

                                
                            <div class="col-2">
                                     <div class="col-md-3 col-xs-5">
                                    <div class="contact-us-widget widget">
                                        <div class="title-widget"> Agence Casablanca</div>
                                        <div class="content-widget">
                                          <div class="info-list">
                                                <ul class="list-unstyled">
                                                    <li><i class="icons fa fa-map-marker"></i><a href="#" class="link"><?php if (!empty($data['address2'])): ?> <span class="label">  <?php print $data['address2'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-phone"></i><a href="#" class="link"><?php if (!empty($data['phone3'])): ?><?php print $data['phone3'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-phone"></i><a href="#" class="link"><?php if (!empty($data['phone4'])): ?><?php print $data['phone4'] ; ?><br> <?php endif ?></a></li>
                                                    <li><i class="icons fa fa-fax"></i><a href="#" class="link">FAX : <?php if (!empty($data['fax2'])): ?><?php print $data['fax2'] ; ?><br> <?php endif ?></a></li>

                                                    <li><i class="icons fa fa-envelope-o"></i><a href="#" class="link"><?php if (!empty($data['email2'])): ?>  <?php print $data['email2'] ; ?><br> <?php endif ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                  <div class="col-md-2 col-xs-3">
                                    <div class="booking-widget widget text-center">
                                        <div class="title-widget">MENU</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled">
                                                    <?php $lien='<front>'; ?>
                                                <li><a href="<?php print url($lien) ; ?>" class="link">Accueil</a></li>
                                                <li><a href="<?php print url('/aboutfav') ; ?>" class="link">À propos</a></li>
                                                <li><a href="<?php print url('/travels') ; ?>" class="link">Séjours</a></li>
                                                <li><a href="<?php print url('/tourislamic') ; ?>" class="link">Hajj_omrah</a></li>
                                                <li><a href="<?php print url('/hotel') ; ?>" class="link">Hôtels</a></li>
                                                <li><a href="<?php print url('/contactfav') ; ?>" class="link">Contactz-nous</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="destination-widget widget">
                                        <div class="title-widget">Gallerie</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img1'] ; ?>" alt="" class="img-responsive"/></a></li>
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img2'] ; ?>" alt="" class="img-responsive"/></a></li>
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img3'] ; ?>" alt="" class="img-responsive"/></a></li>
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img4'] ; ?>" alt="" class="img-responsive"/></a></li>
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img5'] ; ?>" alt="" class="img-responsive"/></a></li>
                                                <li><a href="<?php print url('/gallerie') ; ?>" class="thumb"><img src="<?php print $data['img6'] ; ?>" alt="" class="img-responsive"/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
                                
         

            <?php endif ?> 