   <section class="videos layout-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="video-wrapper padding-top padding-bottom"><h5 class="sub-title"> Le  <strong> Monde</strong> est plus Grand </h5>

                                    <h2 class="title">Allez explorer </h2>

                                    <div class="text"> N'ayez jamais peur de la vie, n'ayez jamais peur de l'aventure, faites confiance au hasard, à la chance, à la destinée. Partez, allez conquérir d'autres espaces, d'autres espérances. Le reste vous sera donné de surcroît.</div>
                                    <a href="<?php print url('/travels') ; ?>" class="btn btn-maincolor"> Voir plus  </a></div>
                            </div>
                            <div class="col-md-7">
                                <div class="video-thumbnail">
                                    <?php if (!empty($data['image'])): ?>
                                    <div class="video-bg"><img src="<?php print $data['image'] ; ?>" alt="" class="img-responsive"></div>
                                     <?php endif ?>
                                    <div class="video-button-play"><i class="icons fa fa-play"></i></div>
                                    <div class="video-button-close"></div>
                                      <?php if (!empty($data['youtube'])): ?>
                                        <iframe src="<?php print $data['youtube'] ; ?>" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
                                      <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>