  <section class="about-us layout-1 padding-top padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="group-title">
                                    <div class="sub-title"><p class="text"> Découvrir Favori </p><i class="icons flaticon-people"></i></div>
                                    <h2 class="main-title"> Nous sommes Favori </h2></div>
                                <div class="about-us-wrapper"><p class="text"> Après plus de 14 ans d´expérience diversifiée dans le domaine du voyage, le but de favori ultime est d‘aider les voyageurs à planifier les déplacements d´affaires et les vacances pour qu´elles soient des plus réussies.</p>

                                    <div class="group-list">
                                        <ul class="list-unstyled about-us-list">
                                            <li><p class="text">Vols de première classe</p></li>
                                            <li><p class="text">Hebérgement 5 étoiles </p></li>
                                            <li><p class="text">Forfait Inclus</p></li>
                                            
                                        </ul>
                                        <ul class="list-unstyled about-us-list">
                                        
                                            <li><p class="text">Gestion de l'accesibilité</p></li>
                                            <li><p class="text"> plusieurs Langues disponibles</p></li>
                                            <li><p class="text">+100 visites guidées</p></li>
                                        </ul>
                                    </div>
                                    <div class="group-button"><a href="<?php print url('/aboutfav') ; ?>" class="btn btn-maincolor">Voir plus</a></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                  <?php if (!empty($data['image'])): ?>
                                <div data-wow-delay="0.5s" class="about-us-image wow zoomIn"><img src="<?php print $data['image'] ; ?>"  alt="" class="img-responsive"> <?php endif ?> </div>
                            </div>
                        </div>
                    </div>
                </section>