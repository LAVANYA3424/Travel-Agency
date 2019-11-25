<?php 

function master_menu()
{
	$items = array();

	$items['reservation/%'] = array(
			'title' => t('Reservation') ,
			'page callback' => '_reservation' ,
			'page arguments' => array(1),
			'access arguments' => array('access content'),
			);
	$items['admin/configuration'] = array(
		'title' => t('Configuration'),
		'page callback' => '_configuration',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);

	$items['aboutfav'] = array(
		'title' => t('About_favori'),
		'page callback' => '_aboutfav',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);
	$items['contactfav'] = array(
		'title' => t('Contact_favori'),
		'page callback' => '_contactfav',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);
	$items['travels'] = array(
		'title' => t('Travels'),
		'page callback' => '_travels',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);
	$items['hotel'] = array(
		'title' => t('Hotel'),
		'page callback' => '_hotel',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);
	$items['erreur'] = array(
		'title' => t('page404'),
		'page callback' => '_erreurpage',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);
	$items['tourislamic'] = array(
		'title' => t('Hajj-Umrah'),
		'page callback' => '_tourislamic',
		'page arguments' => array(1),
		'access arguments' => array('access content'),
		);

	return $items;
}

