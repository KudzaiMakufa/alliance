<?php
class Controller_Advert extends Controller_Template
{

	public function action_index()
	{
		$data['adverts'] = Model_Advert::find_all();
		$this->template->title = "Adverts";
		$this->template->content = View::forge('advert/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('advert');

		$data['advert'] = Model_Advert::find_by_pk($id);

		$this->template->title = "Advert";
		$this->template->content = View::forge('advert/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$prices = Model_Price::find_by_pk(1);
			
			$val = Model_Advert::validate('create');
			//DEbug::dump(Input::post('duration'));die;
			//get current billboard price
			if(Input::post('duration') === "0"){
				Session::set_flash('error', 'Select billboard duration');
			}
			else
			{

					if ($val->run())
					{
						$advert = Model_Advert::forge(array(
							'name' => Input::post('name'),
							'organisation' => Input::post('organisation'),
							'location' => Input::post('location'),
							'duration' => Input::post('duration'),
							'start_date' => Input::post('start_date'),
							'price' =>$prices->billboard_price * Input::post('duration') ,
							'created_at' => time(),
							'updated_at' => 0,
						));

						if ($advert and $advert->save())
						{
							Session::set_flash('success', 'Added advert #'.$advert->id.'.');
							Response::redirect('advert');
						}
						else
						{
							Session::set_flash('error', 'Could not save advert.');
						}
					}
					else
					{
						Session::set_flash('error', $val->error());
					}
			}
		}

		$this->template->title = "Adverts";
		$this->template->content = View::forge('advert/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('advert');

		$advert = Model_Advert::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Advert::validate('edit');

			if ($val->run())
			{
				$advert->name = Input::post('name');
				$advert->organisation = Input::post('organisation');
				$advert->location = Input::post('location');
				$advert->duration = Input::post('duration');
				$advert->start_date = Input::post('start_date');
				$advert->price = Input::post('price');

				if ($advert->save())
				{
					Session::set_flash('success', 'Updated advert #'.$id);
					Response::redirect('advert');
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

		$this->template->set_global('advert', $advert, false);
		$this->template->title = "Adverts";
		$this->template->content = View::forge('advert/edit');

	}

	public function action_delete($id = null)
	{
		if ($advert = Model_Advert::find_one_by_id($id))
		{
			$advert->delete();

			Session::set_flash('success', 'Deleted advert #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete advert #'.$id);
		}

		Response::redirect('advert');

	}

}
