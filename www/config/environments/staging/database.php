<?php defined('SYSPATH') OR die('No direct access allowed.');

/*botenbankbotenbank
*/
return array
(
	'default' => array
	(
		    'type'       => 'mysql',
		    'connection' => array(
			/**
			 * The following options are available for MySQL:
			 *
			 * string   hostname
			 * string   username
			 * string   password
			 * boolean  persistent
			 * string   database
			 *
			 * Ports and sockets may be appended to the hostname.
			 */
			 
             /*boats_stagebotenbankbotenbank   botenbankbotenbank  boats_stage    botenbank  boats_stage */	
		     'hostname'   => 'localhost',  
			 'username'   => 'test_market_bike',
			 'password'   => '#testgreencat',
			 'persistent' => FALSE,
			 'database'   => 'test_market_bike',
		),
		
		    'table_prefix' => '',
		    'charset'      => 'utf8',
		    'caching'      => FALSE,
		    'profiling'    => TRUE,
	 ),
	        'alternate' => array(
		    'type'       => 'pdo',
		    'connection' => array(
			/**
			 * The following options are available for PDO:boats_stage botenbank boats_stage botenbank boats_stage
			 *
			 * string   dsnboats_stage
			 * string   username
			 * string   password
			 * boolean  persistent
			 * string   identifier
			 */
			
             /*botenbankbotenbank */			
             'dsn'        => 'mysql:host=localhost;dbname=sh',
			 'username'   => 'root',
			 'password'   => '',
			 'persistent' => FALSE,
		),
		     'table_prefix' => '',
		     'charset'      => 'utf8',
		     'caching'      => FALSE,
		     'profiling'    => TRUE,
	),
);