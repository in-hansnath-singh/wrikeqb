<?php defined('SYSPATH') or die('No direct script access.');

return array(
        //Ckeditor's configuration
        'path'    =>    '/ckeditor/',    // Path to the ckeditor folder relative to index.php
 
        //Optionnal values
        'config' => array(
            //'toolbar'     =>     "Basic",     //Using the Full toolbar or Basic
            /*
            'Cut','Copy','Paste','PasteText','PasteFromWord','-','Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
            '/',
            ['Styles','Format'],
            ['Bold','Italic','Strike'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
            ['Link','Unlink','Anchor'],
            ['Maximize','-','About']
            */
            
            'toolbar'     =>    array(
                                        array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','Templates' ),
                                        array( 'Image', 'Link', 'Unlink', 'Anchor' ),
                                        array('Styles','Format'),'/',
										array( 'Image', 'Link', 'Unlink', 'Anchor' ),
                                        array('NumberedList','BulletedList','-','Outdent','Indent','Blockquote'),
                                        array('Maximize'),
                                        ),
                                        
            'width'     =>     "550px",    //Setting a custom width
            'height'     =>     '100px',    //Setting a custom height

        ), 

        //Replacing styles from the "Styles tool"
        'styles' => array(

            //Creating a new style named "style 1"
            'searchButton' => array (
                'name'         =>     'searchButton',
                'element'     =>     'span',
                'styles' => array(
                    'color'         =>     '#868686',
                    'font-weight'   =>     'bold',
					'font-family'   =>   'Gill Sans MT'
                )
            ),

            //Creating a new style named "style 2"
            'bikeInfo' => array (
                'name'         =>     'bikeInfo',
                'element'     =>     'p',
                'styles' => array(
                    'color'         =>     '#f1f1f1',
                    'font-weight'         =>     'bold',
                    'text-decoration'    =>     'none',
					'font-size'   =>   '11px',
					'line-height'   =>   '18px',
					'font-family'   =>   'Verdana'
                )
            ) ,
			
		'forminput' => array (
                'name'         =>     'bikeInfo',
                'element'     =>     'p',
                'styles' => array(
                    'color'         =>     '#f1f1f1',
                    'font-weight'         => 'normal',
                    'background-color'    => '#fff',
					'font-size'   =>   '12px',
					'font-family'   =>   'Verdana'
                )
            ) ,
		'checkbox_whitetext' => array (
                'name'         =>     'bikeInfo',
                'element'     =>     'p',
                'styles' => array(
                    'color'         =>     '#f1f1f1',
                    'font-weight'         => 'normal',
                    'background-color'    => '#fff',
					'font-family'   =>   'Verdana',
					'font-size'   =>   '12px',
					'float' =>   'left'
                )
            ) ,
		'redText_list' => array (
                'name'         =>     'bikeInfo',
                'element'     =>     'p',
                'styles' => array(
                    'color'         =>     '#F73732',
                    'text-decoration'    =>     'none',
                    'font-weight'         => 'bold',
					'font-family'   =>   'Arial',
					'font-size'   =>   '12px'
                )
            ) ,
		'packageRedTitleB' => array (
                'name'         =>     'bikeInfo',
                'element'     =>     'p',
                'styles' => array(
                    'color'         =>     '#F73832',
                    'text-decoration'    =>     'none',
					'font-family'   =>   'Arial',
					'font-size'   =>   '15px'
                )
            ) 
        )
);