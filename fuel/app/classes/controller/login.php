<?php

class Controller_Login extends Controller_Template
{
	

	public function action_index()
	{
		//	Debug::dump(input::method());die;
		
		if(input::method() == 'GET'){

				$username = Input::get('username');
				$password = Input::get('pass');


				if (Auth::login($username, $password))
				{
						// $rolename = Auth::get_profile_fields('role') ;
						// if($rolename == 'patient'){
						// 	Response::redirect('advertisers');
						// }
						// else{
						// 	Response::redirect('visit/create');
						// }
					Response::redirect('advertisers');
					
				}
				else{
					Session::set_flash('error', 'Incorrect Username or Password');
				}


			//Debug::dump(input::get('username'));die;
		}
		return new Response(View::forge('login/index'));
		
	}

	public function action_logout()
	{
	  Auth::logout();
	
        Session::set_flash('success','Successfully logged out');
		Response::redirect('login');
		return new Response(View::forge('test/test'));
	}

}
