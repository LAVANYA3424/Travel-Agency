<?php 

function master_preprocess_page(&$vars) {
	if (drupal_is_front_page()) {
		unset($vars['page']['content']['system_main']);
	}
}

function master_preprocess_node(&$vars) {
	if ($vars['type'] == 'travel') {
		$vars['theme_hook_suggestions'][] = 'node_'.$vars['view_mode'] ;
	}
}

function master_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'views_exposed_form') {
		unset($form['field_travel_type_tid']['#description']);
	}
}

function master_custom_theme(){
	global $base_url;

	$themes = array(
		'ta1' => 'responsive',
		'ta2' => 'fresh',
		'ta3' => 'venture_theme',
		'ta4' => 'corporate',
		'ta5' => 'corporate_agency',
		'ta6' => 'dark_elegant',
		'ta7' => 'blogger_theme',
		'ta8' => 'creative',
		'ta9' => 'impact_theme',
		'ta10' => 'multipurpose',
		'ta11' => 'bluemasters',
		'ta12' => 'nexus',
		'ta13' => 'bluemasters',
		'ta14' => 'business',
		'ta15' => 'best_responsive',
		);
	$sd = strstr($base_url, '.', true);
	$sd = substr($sd, 7,4);
	foreach ($themes as $k => $v) {
		if ($k == $sd) {
		 	return $v;
		 } 
	}
}
