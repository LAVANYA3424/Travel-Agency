<?php 



#############################################
/****************  Blocs  ****************/
#############################################


/**
* @author Taha Elalami
*/
function master_block_info() {
    $blocks = array();

    $blocks['home_slider'] = array(
        'info' => t('Home - slider'),
        'status' => 1
    );

    $blocks['facebook_timeline'] = array(
        'info' => t('Facebook - timeline'),
        'status' => 1
    );

    $blocks['aboutus'] = array(
        'info' => t('About us'),
        'status' => 1,
        'region' => 'content'
    );

    $blocks['contact'] = array(
        'info' => t('Contact us'),
        'status' => 1,
        'region' => 'footer'
    );

    $blocks['hajj_omra'] = array(
        'info' => t('hajj and omra'),
        'region' => 'content'
    );

    $blocks['we_are_favori'] = array(
        'info' => t('WE ARE FAVORI'),
        'region' => 'content'
    );
    $blocks['hotel'] = array(
        'info' => t('hotelshome'),
        'region' => 'content'
    );
    $blocks['sejours'] = array(
        'info' => t('Sejours'),
        'region' => 'content'
    );
    $blocks['video'] = array(
        'info' => t('Video_v'),
        'region' => 'content'
    );
    $blocks['dream'] = array(
        'info' => t('FAVORI_DREAM'),
        'region' => 'content'
    );
     $blocks['temoin'] = array(
        'info' => t('temoignage'),
        'region' => 'content'
    );
    $blocks['sponseur'] = array(
        'info' => t('sponsor'),
        'region' => 'content'
    );
    $blocks['headerhome'] = array(
        'info' => t('HEADERHOME'),
        'region' => 'content'
    );
     $blocks['headabout'] = array(
        'info' => t('HEADERabout'),
        'region' => 'content'
    );
     $blocks['headtravel'] = array(
        'info' => t('HEADERtravel'),
        'region' => 'content'
    );
     $blocks['headhotels'] = array(
        'info' => t('HEADERHOTEL'),
        'region' => 'content'
    );
     $blocks['headcontact'] = array(
        'info' => t('HEADERcontact'),
        'region' => 'content'
    );
     $blocks['headnode'] = array(
        'info' => t('HEADERNODE'),
        'region' => 'content'
    );
     $blocks['headnodehotel'] = array(
        'info' => t('HEADERNODEHOTEL'),
        'region' => 'content'
    );
     $blocks['investors'] = array(
        'info' => t('investors'),
        'region' => 'content'
    );
      $blocks['offrespe'] = array(
        'info' => t('offre_special'),
        'region' => 'content'
    );
      $blocks['hotelspe'] = array(
        'info' => t('hotel_special'),
        'region' => 'content'
    );
     $blocks['headtourislamic'] = array(
        'info' => t('headtourislamic'),
        'region' => 'content'
    ); 




    return $blocks;
}


#############################################
/*****************  Views  *****************/
#############################################
/**
 * @author Taha Elalami
 */
function master_block_view($delta = '') {

    $block = array();
    switch ($delta) {
        case 'home_slider':
            $block['content'] = _home_slider();
        break;
        case 'facebook_timeline':
            $block['content'] = _facebook_timeline();
        break;
        case 'aboutus':
            $block['content'] = _about_us();
        break;
        case 'contact':
            $block['content'] = _contact();
        break;
        case 'hajj_omra':
            $block['content'] = _hajj_omra();
        break;
        case 'we_are_favori':
            $block['content'] = _we_arefavori();
        break;
        case 'sejours':
            $block['content'] = _sejours();
        break;
        case 'video':
            $block['content'] = _video();
        break;
        case 'dream':
            $block['content'] = _dream();
        break;
        case 'temoin':
            $block['content'] = _temoin();
        break;
         case 'sponseur':
            $block['content'] = _sponsor();
        break;
         case 'headerhome':
            $block['content'] = _headhome();
        break;
          case 'headabout':
            $block['content'] = _headabout();
        break;
          case 'headtravel':
            $block['content'] = _headtravel();
        break;
          case 'headhotels':
            $block['content'] = _headhotel();
        break;
          case 'headcontact':
            $block['content'] = _headcontact();
        break;
          case 'headnode':
            $block['content'] = _headnode();
        break;
        case 'headnodehotel':
            $block['content'] = _headnodehotel();
        break;
        case 'investors':
            $block['content'] = _investors();
        break;
        case 'offrespe':
            $block['content'] = _offrespe();
        break;
         case 'hotelspe':
            $block['content'] = _hotelspe();
        break;
        case 'headtourislamic':
            $block['content'] = _headtourislamic();
        break;
        case 'hotel':
            $block['content'] = _hotelhome();
        break;





    }

    return $block;
}


