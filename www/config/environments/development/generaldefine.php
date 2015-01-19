<?php defined('SYSPATH') or die('No direct script access.');
return array(
	'definedata' =>array(
		'DEF_TO_EMAIL'	=>	'vivek.bhat@tiez.nl',
		'DEF_BCC_EMAIL'	=>	'vivek.bhat@tiez.nl',
		'DEF_CC_EMAIL'	=>	'dilip.vaghasiya@tiez.nl',
		'DEF_FROM_EMAIL'	=>	'info@bikeindia.in',
		
		'URL_OBJECT_IMAGE' => 'http://lc.bikeimages.com/objectimages/',
		'GOOGLE_ANALYTIC_CODE' => '',
		
		// variable for FACEBOOK CREDENTIALS
		'FB_APP_ID' => '250633071624526',
		'FB_APP_SECRET' => '085fe87b67197a4156f87dbd095697e3',

		//FTP user name and password for upload image
		'FTP_USERNAME' => 'bikeimages',
		'FTP_PASS' => 'dilip',
		'FTP_SERVER' => 'lc.bikeimages.com',

		'DIR_IMGAGE' => 'D:\xampp\htdocs\TiezInternal\instabikes\www\media\objectimages\\',
		'UPLOAD_TYPE' => '',
		
		'IN_PRODCUTION' => false,
		'SEND_EMAIL_ADDRESS' => 'STATIC',
	),
	'overview_specification' => array('3'=>'SUSPENSION','4'=>'BRAKES','5'=>'WHEELS','6'=>'ELECTRICALS','40'=>'FUEL TANK'),	 
	'engine_performennce_specification' => array('1' => 'ENGINE','2' => 'TRASMISSION'),
	'dimensions_specification' => array('7' => 'DIMENSIONS'),
);