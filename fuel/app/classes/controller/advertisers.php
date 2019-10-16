<?php
class Controller_Advertisers extends Controller_Template
{

	public function action_index()
	{
		$data['advertisers'] = Model_Advertiser::find_all();
		$this->template->title = "Users";
		$this->template->content = View::forge('advertisers/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('advertisers');

		$data['advertiser'] = Model_Advertiser::find_by_pk($id);

		$this->template->title = "Users";
		$this->template->content = View::forge('advertisers/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Advertiser::validate('create');

			if ($val->run())
			{
				if(Input::post('password') == Input::post('password2'))
				{	
						$user = Auth::create_user(
								Input::post('phone_number'),
								Input::post('password'),
								Input::post('email'),
								1,
								array(
									'organisation' => Input::post('organisation'),
								) );
						$advertiser = Model_Advertiser::forge(array(
							'first_name' => Input::post('first_name'),
							'last_name' => Input::post('last_name'),
							'organisation' => Input::post('organisation'),
							'organisation_address' => Input::post('organisation_address'),
							'phone_number' => Input::post('phone_number'),
							'email' => Input::post('email'),
							'password' => '*******',
							'created_at' => time(),
							'updated_at' => 0,

						));
						$organisation = Model_Organisation::forge(array(
							'name' => Input::post('organisation'),
							'created_at' => time(),
							'updated_at' => 0,
						));

						if ( $user  && $advertiser->save() && $organisation->save() )
						{
							Session::set_flash('success', 'Added new user with email : '.$advertiser->email.'.');
							Response::redirect('advertisers');
						}
						else
						{
							Session::set_flash('error', 'Could not save user.');
						}
			    }else{
			    	Session::set_flash('error', 'passwords did not match');
			    }
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Users";
		$this->template->content = View::forge('advertisers/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('advertisers');

		$advertiser = Model_Advertiser::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Advertiser::validate('edit');

			if ($val->run())
			{
				$advertiser->first_name = Input::post('first_name');
				$advertiser->last_name = Input::post('last_name');
				$advertiser->organisation = Input::post('organisation');
				$advertiser->organisation_address = Input::post('organisation_address');
				$advertiser->phone_number = Input::post('phone_number');
				$advertiser->email = Input::post('email');
				$advertiser->password = '*******';
				
				$advertiser->updated_at = time();

				if ($advertiser->save())
				{
					Session::set_flash('success', 'Updated User with email '.$advertiser->email);
					Response::redirect('advertisers');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('advertiser', $advertiser, false);
		$this->template->title = "Advertisers";
		$this->template->content = View::forge('advertisers/edit');

	}

	public function action_delete($id = null)
	{
		if ($advertiser = Model_Advertiser::find_one_by_id($id))
		{
			$advertiser->delete();

			Session::set_flash('success', 'Deleted advertiser #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete advertiser #'.$id);
		}

		Response::redirect('advertisers');

	}

}
