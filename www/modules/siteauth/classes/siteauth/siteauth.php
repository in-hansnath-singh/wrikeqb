<?php 
defined('SYSPATH') or die('No direct script access.');
class Siteauth_Siteauth{
	public $languageid;
	
    public function __construct($contentid = NULL){
		$this->languageid  = Session::instance()->get("site_languageid");        
    }	
	
	
	public function login($username, $password, $remember = FALSE){
		try{
		  echo $query = "select * from users where username = '".trim($username)."' and password = '".trim($password)."'";


		   $result = DB::query(Database::SELECT,$query)->execute();
		  // $result = DB::query(Database::SELECT, 'SELECT * FROM users ORDER By user_id DESC')->execute();
		   if(count($result) > 0 && $result)
		   {
				//$user_data = array('logincount' => $result['logincount']+1, 'lastlogin'=> date('Y-m-d H:i:s'));
				//DB::update('users')->set($user_data)->where('user_id','=',$result['user_id'])->execute();
				return $result;
		   }
			else
			{	
				return false;
			}
		}catch(Database_Exception $e){
			/* We will write kohana log here later*/
		}
	}

	/*public function encrypt($string)
	{
		$key = Kohana::config('auth')->get('password_key');
		$result = '';
		for($i=0; $i<strlen($string); $i++)
		{
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result.=$char;
		}
		return base64_encode($result);
	}*/
/*
	public function decrypt($string)
	{
		$key = Kohana::config('auth')->get('password_key');
		$result = '';
		$string = base64_decode($string);
		for($i=0; $i<strlen($string); $i++)
		{
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)-ord($keychar));
			$result.=$char;
		}
		return $result;
	}
	*/
	
	public function loginRegisterFbUsers($code){
		try{
		$app_id = FB_APP_ID;
		$app_secret = FB_APP_SECRET;
		$redirect_url = FB_REDIRECT_URL;
		
		$token_url = "https://graph.facebook.com/oauth/access_token?"."client_id=".$app_id."&redirect_uri=".urlencode($redirect_url)."&client_secret=".$app_secret."&code=".$code;

			$response = file_get_contents($token_url);
			$params = null;
			parse_str($response, $params);

			$graph_url = "https://graph.facebook.com/me?access_token=".$params['access_token'];

			Session::instance()->set('fb_acces_stoken', $params['access_token']);
			
			$userinfo = json_decode(file_get_contents($graph_url));	
		
		   $query = "select * from users where fb_id = '".$userinfo->id."'";
		   $result = DB::query(Database::SELECT,$query)->execute()->current();
		   
		   if(count($result) > 0 && $result)
		   {
				$user_data = array('logincount' => $result['logincount']+1, 'lastlogin'=> date('Y-m-d H:i:s'));
				DB::update('users')->set($user_data)->where('user_id','=',$result['user_id'])->execute();
				
				Session::instance()->set('userid', $result['user_id']);
				Session::instance()->set('email', $userinfo->email);
				Session::instance()->set('fullname', $userinfo->first_name." ".$userinfo->last_name);
				Session::instance()->set('usertype', 'facebook');
			
				return $result;
		   }
			else
			{	
				$siteauthobj = new siteauth();
				$password = $siteauthobj->encrypt(rand());
			
				$user_data = array(
  					'first_name'       	=> $userinfo->first_name,
					'last_name'			=> $userinfo->last_name,
					'email'				=> $userinfo->email,
					'username'			=> $userinfo->email,
					'password'			=> $password,
					'is_active'			=> 'Y',
					'role_id'			=> '2',
					'fb_id'				=> $userinfo->id,
				);
				
				$qry_insert = DB::insert('users', array_keys($user_data))->values($user_data);
				list($user_id, $rows) = $qry_insert->execute();
				
				$user_details = array(
					'user_id'       	  => $user_id,
  					'company_description' => "Enter description.",
				);
				$qry_insert = DB::insert('user_details', array_keys($user_details))->values($user_details)->execute();
				
				Session::instance()->set('userid', $user_id);
				Session::instance()->set('email', $userinfo->email);
				Session::instance()->set('fullname', $userinfo->first_name." ".$userinfo->last_name);
				Session::instance()->set('usertype', 'facebook');
				
				return $qry_insert;
			}
		}catch(Database_Exception $e){
			/* We will write kohana log here later*/
		}
	}
	
	
}
	?>