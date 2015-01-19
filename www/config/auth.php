<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'security_method' => 'custome',//sha1 Or custome
    'hash_method' => 'sha1',
    'password_key' => 'bikeindia',
    'salt_pattern' => '1, 3, 5, 9, 14, 15, 20, 21, 28, 30',
    'lifetime' => 1209600,
    'def_rpp' => 20,
	'logo_path' => '/en/media/userimage',
	'brand_logo_path' => APPPATH.'media'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'brand',
	'model_img_path' => APPPATH.'media'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'model',
	'variant_img_path' => APPPATH.'media'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'variants',
	'address' =>array
	(
		'country_state' => 'state',
		'country_state_hide' => 'country',
		'country_state_id' => 78,

	),

    'session_key' => 'auth_admin_user',
    'users' => array
    (
        // 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
    ),
    'session_columns'=> array('user_id','role_id','email',),
);