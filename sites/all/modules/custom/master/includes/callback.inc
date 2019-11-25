<?php

function  _reservation()
{
	$args = arg();
	if (isset($args[1]) && (int)$args[1] != 0 ) {
		$travel = node_load($args[1]);
	
		if (isset($travel->nid)) {
			return drupal_get_form('reservation_form', $travel);
		}
		else { 
			return t('Travel not found');
		}
    }
	else {
		drupal_not_found();
	}
}


function  _configuration()
{
	return drupal_get_form('configuration_form');
}

function  _travels()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'travel')
	->fieldCondition('field_travel_type', 'tid', array(2,3),'IN')
 ->propertyCondition('status', 1)
 ->range(0,8);
	$result = $query->execute();
	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('travels',array('result'=>$result));
}
function  _offrespe()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'travel')
 ->propertyCondition('status', 1)
 ->range(5,30);
	$result = $query->execute();
	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('offrespe',array('result'=>$result));
}


function  _hotel()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'hotel')
 ->propertyCondition('status', 1)
 ->range(0,8);
	$result = $query->execute();

	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('hotels',array('result'=>$result));
}

function  _hotelhome()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'hotel')
 ->propertyCondition('status', 1)
 ->range(0,4);
	$result = $query->execute();

	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('hotelhome',array('result'=>$result));
}

function  _hotelspe()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'hotel')
 ->propertyCondition('status', 1)
 ->range(0,7);
	$result = $query->execute();

	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('hotelspe',array('result'=>$result));
}

function  _contactfav()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'worker')
 ->propertyCondition('status', 1)
 ->range(0,6);
	$result = $query->execute();

	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('contactfav',array('result'=>$result));
}


function  _aboutfav()
{
		$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'worker')
 ->propertyCondition('status', 1)
 ->range(0,12);
	$result = $query->execute();

	
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

}

	return theme('aboutfav',array('result'=>$result));
}

function _home_slider(){
	$slides = array();
	global $language;
	$query = new EntityFieldQuery();
	$result = $query->entityCondition('entity_type', 'node')
	              ->entityCondition('bundle','slide')
	              ->propertyCondition('language',$language->language)
	              ->execute();

	if (isset($result['node'])) {
	  $slides = entity_load('node', array_keys($result['node']));
	}
	return theme('home_slider',array('slides'=>$slides));
}


function _facebook_timeline(){
	return theme('facebook_timeline',array());
}


function _about_us() {
	$text = variable_get('about_us','');
	return theme('about_us',array('text'=>$text));
}

function _contact() {
	$data = array();
	$data['phone1'] = variable_get('phone_1','');
	$data['phone2'] = variable_get('phone_2','');
	$data['phone3'] = variable_get('phone_3','');
	$data['phone4'] = variable_get('phone_4','');

	$data['address'] = variable_get('adresse','');
	$data['address2'] = variable_get('adresse2','');

	$data['fax'] = variable_get('fax','');
	$data['fax2'] = variable_get('fax_2','');

	$data['about_us'] = variable_get('about_us','');
	$data['email'] = variable_get('email','');
	$data['email2'] = variable_get('email_2','');

	$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
	$data['img1'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-01.jpg';
	$data['img2'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-02.jpg';
	$data['img3'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-03.jpg';
	$data['img4'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-04.jpg';
	$data['img5'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-04.jpg';
	$data['img6'] =  drupal_get_path('module', 'master') . '/assets/images/footer/gallery-05.jpg';
	
	return theme('contact',array('data'=>$data));
}

function _hajj_omra(){
    
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'travel')
	->fieldCondition('field_travel_type', 'tid', array(1),'IN')
  	->propertyCondition('status', 1)
  	->range(0,6);
	$result = $query->execute();
	
	if (!empty($result['node'])) {

		$ids = array();

		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

	}

	return theme('hajj_omra',array('result'=>$result));
}

function _tourislamic(){
    
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	->entityCondition('bundle', 'travel')
	->fieldCondition('field_travel_type', 'tid', array(1),'IN')
  	->propertyCondition('status', 1)
  	->range(0,8);
	$result = $query->execute();
	
	if (!empty($result['node'])) {

		$ids = array();

		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);

	}

	return theme('tourislamic',array('result'=>$result));
}

function _we_arefavori()
{
	$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/homepage/abou1.jpg';
		
	return theme('we_are_favori',array('data'=>$data));
}

function _sejours(){
    
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	      ->range(0, 4)
	->entityCondition('bundle', 'travel')
	->fieldCondition('field_travel_type', 'tid', array(3),'IN')
  	->propertyCondition('status', 1);
	$result = $query->execute();


	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);
	}

		return theme('sejours',array('result'=>$result));
}


function _video() {
			$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/video-bg.jpg';
			$data['youtube'] = variable_get('youtube_page_url','');
			return theme('video',array('data'=>$data));
		}
function _erreurpage() {
			$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/bg_404_Cloud-3.png';

			return theme('erreur_page',array('data'=>$data));
		}		



function _dream(){
	return theme('dream',array());
}


function _temoin(){ 
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	   
	->entityCondition('bundle', 'temoignage')
  	->propertyCondition('status', 1);
	$result = $query->execute();

	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);
	}

	return theme('temoin',array('result'=>$result));
}

function _sponsor(){ 
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	   
	->entityCondition('bundle', 'sponseur')
  	->propertyCondition('status', 1);
	$result = $query->execute();
 
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);
	}

	return theme('sponsor',array('result'=>$result));
}

function _investors(){ 
	$query = new EntityFieldQuery();
	$query->entityCondition('entity_type', 'node')
	      ->range(0, 8)
	->entityCondition('bundle', 'sponseur')
  	->propertyCondition('status', 1);
	$result = $query->execute();
 
	if (!empty($result['node'])) {
		$ids = array();
		foreach ($result['node'] as $k => $v) $ids[] = $v->nid;
		$result = entity_load('node',$ids);
	}

	return theme('investors',array('result'=>$result));
}

function _headhome(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/homepage-default-banner.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headhome',array('data'=>$data));

}

function _headabout(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/about.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headabout',array('data'=>$data));

}

function _headtravel(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/tour2.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headtravel',array('data'=>$data));

}
function _headtourislamic(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/kaaba6.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headtourislamic',array('data'=>$data));

}

function _headhotel(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/hotel-result.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headhotell',array('data'=>$data));

}

function _headcontact(){ 
		$data = array();
			$data['image'] = drupal_get_path('module', 'master') . '/assets/images/background/contact.jpg';
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';
			return theme('headcontact',array('data'=>$data));

}

function _headnode(){ 
		    $data = array();
			$args = arg();
			$data['travel'] = node_load($args[1]);
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';

			return theme('headnode',array('data'=>$data));
}
function _headnodehotel(){ 
		    $data = array();
			$args = arg();
			$data['travel'] = node_load($args[1]);
			$data['logo'] =  drupal_get_path('module', 'master') . '/assets/images/logo/logofav.png';

			return theme('headnodehotel',array('data'=>$data));
}

function  _contform()
{
	return drupal_get_form('contact_form');
}