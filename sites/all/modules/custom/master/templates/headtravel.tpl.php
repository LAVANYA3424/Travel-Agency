<div class="body-wrapper"><!-- MENU MOBILE-->
    <div class="wrapper-mobile-nav">
        <div class="header-topbar">
            <div class="topbar-search search-mobile">
                <form class="search-form">
                    <div class="input-icon"><i class="btn-search fa fa-search"></i><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
            </div>
        </div>
       <div class="header-main">
            <div class="menu-mobile">
                <ul class="nav-links nav navbar-nav">
                     <?php  $lien= '<front>'; ?>
                    <li class="dropdown"> <a href="<?php print url($lien) ; ?>" class="main-menu"><span class="text">Accueil</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                    </li>
                    <li><a href="<?php print url('/aboutfav') ; ?>" class="main-menu"><span class="text">À propos </span></a></li>
                    <li class="dropdown active"><a href="<?php print url('/travels') ; ?>" class="main-menu"><span class="text">Sejours</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                    </li>
                    <li class="dropdown"><a href="<?php print url('/tourislamic') ; ?>" class="main-menu"><span class="text">hajj_omra</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                    </li>
                    <li class="dropdown"><a href="<?php print url('/hotel') ; ?>" class="main-menu"><span class="text">Hôtels</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                    </li>
                    <li><a href="contact.html" class="main-menu"><span class="text">Contactez-nous</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- WRAPPER CONTENT-->
    <div class="wrapper-content"><!-- HEADER-->
        <header>
            <div class="bg-transparent">
                
               <div class="header-main">
                    <div class="container">
                        <div class="header-main-wrapper">
                            <div class="hamburger-menu">
                                <div class="hamburger-menu-wrapper">
                                    <div class="icons"></div>
                                </div>
                            </div>
                            <div class="navbar-header">
                                <div class="logo"><a href="<?php print url($lien) ;?>" class="header-logo"><img src="<?php print $data['logo'] ; ?>" alt=""   style="padding-bottom:35px;padding-top:15px;"/></a></div>
                            </div>
                            <nav class="navigation">
                                <ul class="nav-links nav navbar-nav">
                                    <li class="dropdown "><a href="<?php print url($lien) ; ?>" class="main-menu"><span class="text">Accueil</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
            
                                    </li>
                                    <li><a href="<?php print url('/aboutfav') ; ?>" class="main-menu"><span class="text">À propos </span></a></li>
                                   
                                   <li class="dropdown active"><a href="<?php print url('/travels') ; ?>" class="main-menu"><span class="text"> Séjours</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                                           </li>
                                       <li class="dropdown"><a href="<?php print url('/tourislamic') ; ?>" class="main-menu"><span class="text">Hajj_Omra</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                                                           </li>   
                                       <li class="dropdown"><a href="<?php print url('hotel') ; ?>" class="main-menu"><span class="text">Hôtels</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                    </li>
                                  
                                    <li><a href="<?php print url('contactfav') ; ?>" class="main-menu"><span class="text">Contactez-Nous</span></a></li>
                                                                    </ul>
                                
                            </nav>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- WRAPPER-->
        <div id="wrapper-content"><!-- MAIN CONTENT-->
            <div class="main-content">
                <section class="page-banner tour-result" style="background-image : url('<?php print $data['image'] ; ?>')">
                    <div class="container">
                        <div class="page-title-wrapper">
                            <div class="page-title-content">
                                <ol class="breadcrumb">
                                    <li><a href="<?php print url($lien) ; ?>" class="link home">Accueil</a></li>
                                    <li class="active"><a href="#" class="link">Séjours</a></li>
                                </ol>
                                <div class="clearfix"></div>
                                <h2 class="captions">Séjour</h2></div>
                        </div>
                    </div>
                </section>