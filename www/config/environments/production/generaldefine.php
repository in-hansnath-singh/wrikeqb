<?php defined('SYSPATH') or die('No direct script access.');
return array(
	 'definedata' =>array(
		'DEF_TO_EMAIL'	=>	'info@instabikes.in',
		'DEF_BCC_EMAIL'	=>	'form@tiez.nl',
		'DEF_CC_EMAIL'	=>	'form@tiez.nl',
		'DEF_FROM_EMAIL'	=>	'info@instabikes.in',

		'URL_OBJECT_IMAGE' => 'http://marketmedia.tiez.net/objectimages/',
		'GOOGLE_ANALYTIC_CODE' => "var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-20587285-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();",
		
		// variable for FACEBOOK CREDENTIALS
		'FB_APP_ID' => '250633071624526',
		'FB_APP_SECRET' => '085fe87b67197a4156f87dbd095697e3',

		//FTP user name and password for upload image
		'FTP_USERNAME' => 'marketmedia',
		'FTP_PASS' => 'm3@Qe7tde',
		'FTP_SERVER' => '50.57.134.192',

		'DIR_IMGAGE' => '/www/sites/marketmedia.tiez.net/www/objectimages/',
		'UPLOAD_TYPE' => 'FTP',
		
		'IN_PRODCUTION' => true,
		'SEND_EMAIL_ADDRESS' => 'DYNAMIC',
		 ),
	'overview_specification' => array('3'=>'SUSPENSION','4'=>'BRAKES','5'=>'WHEELS','6'=>'ELECTRICALS','40'=>'FUEL TANK'),	 
	'engine_performennce_specification' => array('1' => 'ENGINE','2' => 'TRASMISSION'),
	'dimensions_specification' => array('7' => 'DIMENSIONS'),
);