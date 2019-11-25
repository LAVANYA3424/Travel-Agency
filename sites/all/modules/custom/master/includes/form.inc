<?php 


// formulaire de reservaion
function reservation_form($form, $form_state , $travel)
 {
 	  // $event_date = substr($evenement[$event_id]->field_date_3['und'][0]['value'],0,10); 
 	if (!empty($travel->title)) {
    $form['message_after'] = array(
      '#markup' => '<h3 class="message_after" ><center>'.$travel->title.'</center></h3>'
      );
 	}

 	$form['desctiption'] = array(
		'#type' => 'wrapper',
		'#required' => true,
		); 	

	$form['field_first_name'] = array(
		'#title' => t('First name'),
		'#type' => 'textfield',
		'#required' => true,
		); 	
 	
	$form['field_last_name'] = array(
		'#title' => t('Last name'),
		'#type' => 'textfield',
		'#required' => true,
		); 	


	$form['field_cin'] = array(
		'#title' => t('CIN'),
		'#type' => 'textfield',
		'#required' => true,
		); 	

	$form['field_phone'] = array(
		'#title' => t('Phone'),
		'#type' => 'textfield',
		'#required' => true,
		); 	

	$form['field_email'] = array(
		'#title' => t('Email'),
		'#type' => 'textfield',
		'#required' => true,
		);

	$form['field_civility'] = array(
		'#title' => t('Civility'),
		'#type' => 'select',
		'#options' => array(
			'female' => t('Female'),
			'male' => t('Male'),
			),
		'#required' => true,
		);
	$form['field_age'] = array(
		'#title' => t('Age'),
		'#type' => 'textfield',
		'#size' => 10,
		'#required' => true,
		);

$form['field_comment'] = array(
		'#title' => t('Comment'),
		'#type' => 'textarea',
		'#size' => 10,
		'#required' => true,
		);


$form['travel_id'] = array(
		'#type' => 'hidden',
		'#default_value' => $travel->nid,
		);

$form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('Submit'),
	);


 	return $form;
 } 


 function reservation_form_submit($form, &$form_state)
 {
 	  $node = new stdClass();
 	  $node->title = $form_state['values']['field_last_name'] . ' ' . $form_state['values']['field_first_name'] ;
      $node->type = 'reservation';

      $node->field_last_name['und'][0]['value'] = $form_state['values']['field_last_name'] ;

      $node->field_first_name['und'][0]['value'] = $form_state['values']['field_first_name'] ;

      $node->field_cin['und'][0]['value'] = $form_state['values']['field_cin'] ;

      $node->field_phone['und'][0]['value'] = $form_state['values']['field_phone'] ;

      $node->field_email['und'][0]['value'] = $form_state['values']['field_email'] ;

      $node->field_civility['und'][0]['value'] = $form_state['values']['field_civility'] ;

      $node->field_age['und'][0]['value'] = $form_state['values']['field_age'] ;

      $node->field_comment['und'][0]['value'] = $form_state['values']['field_comment'] ;

      $node->field_travel['und'][0]['mid'] = $form_state['values']['travel_id'] ;

 		$node = node_submit($node); // Prepare node for saving
 	   node_save($node);


 } 



// Formulaire de configuration
 function configuration_form($form, $form_state)
 {
 	$form = array(); 


 	$form['company_name'] = array(
 		'#title' => t('Company name'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('company_name',''),
 		);

 	$form['email'] = array(
 		'#title' => t('Email sale'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('email',''),
 		);
 	$form['email_2'] = array(
 		'#title' => t('Email casablanca'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('email_2',''),
 		);

 	$form['facebook_page_url'] = array(
 		'#title' => t('Facebook page url'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('facebook_page_url',''),
 		);

 	$form['twitter_page_url'] = array(
 		'#title' => t('Twitter page url'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('twitter_page_url',''),
 		);

 	$form['youtube_page_url'] = array(
 		'#title' => t('Youtube page url'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('youtube_page_url',''),
 		);

    $form['phone_1'] = array(
 		'#title' => t('Phone1 sale'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('phone_1',''),
 		);

    $form['phone_2'] = array(
 		'#title' => t('Phone2 sale'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('phone_2',''),
 		);
     $form['phone_3'] = array(
 		'#title' => t('Phone casablanca'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('phone_3',''),
 		);
      $form['phone_4'] = array(
 		'#title' => t('Phone2 casablanca'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('phone_4',''),
 		);

    $form['fax'] = array(
 		'#title' => t('Fax sale'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('fax',''),
 		);
    $form['fax_2'] = array(
 		'#title' => t('Fax casablanca'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('fax_2',''),
 		);

    $form['adresse'] = array(
 		'#title' => t('Address sale'),
 		'#type' => 'textarea',
 		'#default_value' => variable_get('adresse',''),
 		);

    $form['adresse2'] = array(
 		'#title' => t('Address casablanca'),
 		'#type' => 'textarea',
 		'#default_value' => variable_get('adresse2',''),
 		);

    $form['latitute'] = array(
 		'#title' => t('Latitude'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('latitute',''),
 		);

    $form['lantitude'] = array(
 		'#title' => t('Lantitude'),
 		'#type' => 'textfield',
 		'#default_value' => variable_get('lantitude',''),
 		);

    $form['about_us'] = array(
 		'#title' => t('About-us'),
 		'#type' => 'textarea',
 		'#default_value' => variable_get('about_us',''),
 		);


    return  system_settings_form($form);
 }


 function contact_form($form, $form_state)
 {
 	$form = array(); 


 	$form['Firstname'] = array(
 		'#title' => t('First_name'),
 		'#type' => 'textfield',
 		);
 	$form['Lastname'] = array(
 		'#title' => t('Last_name'),
 		'#type' => 'textfield',
 		);

 	$form['email'] = array(
 		'#title' => t('Email'),
 		'#type' => 'textfield',
 		
 		);

    $form['phone_2'] = array(
 		'#title' => t('Phone '),
 		'#type' => 'textfield',
 		
 		);

  
    $form['adresse'] = array(
 		'#title' => t('Address'),
 		'#type' => 'textarea',
 		
 		);
    
    $form['comment'] = array(
 		'#title' => t('comment'),
 		'#type' => 'textarea',
 		
 		);


    return  system_settings_form($form);
 }

