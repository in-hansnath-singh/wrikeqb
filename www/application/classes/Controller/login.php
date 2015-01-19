<?php defined('SYSPATH') or die('No direct script access.');

class Controller_login extends Controller {

	public function action_index()
	{

if (HTTP_Request::POST == $this->request->method()){
                // Post has no data
                print_r($this->request->post());
$post = $this->request->post();
//print_r($post);
$siteauthobj = new siteauth();
	$result = $siteauthobj->login($post['email'],$post['password']);
	print_r($result);
//$success = Auth::instance()->login($post['email'], $post['password']);
 
if ($result)
{
        echo 'sucess';
}
else
{
    echo 'fail';
}
         }
// Handled from a form with inputs with names email / password

	//$this->response->body('hello, world!');
		 //$this->request->response = 'hello, world!';
       // $this->request->response = View::factory('welcome');
	    
         // $view->site_name = 'Hansnath Kohana';
         // $view->random = rand(1,10);
		  $view = View::factory('login');
          $this->response->body($view);
	}

} // End Welcome
