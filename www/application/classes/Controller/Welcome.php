<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		//$this->response->body('hello, world!');
		 //$this->request->response = 'hello, world!';
       // $this->request->response = View::factory('welcome');
	    
         // $view->site_name = 'Hansnath Kohana';
         // $view->random = rand(1,10);
		 $view = View::factory('login');
          $this->response->body($view);
	}

} // End Welcome
