<?php if (!empty($result)): ?>
            <div class="hyperlink">
                <div class="container">
                    <div class="slide-logo-wrapper">
                    <?php foreach ($result as $key => $value): ?>
                    <?php $src = image_style_url('sponseur',$value->field_sponimg['und'][0]['filename']) ?>
                        <div class="logo-item"><a href="#" class="link"><img src="<?php print $src;?>" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="<?php print $src;?>" alt="" class="img-responsive"/></a></div>
                        <?php endforeach ?>
                    </div>
                    <div class="social-footer">
                        <ul class="list-inline list-unstyled">
                            <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="link pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" class="link google"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                    <div class="name-company"> copyright &copy; 2017 powred by Tah_Oth .</div>
                </div>
            </div>

<?php endif; ?>
