<?php
class Controller_Price extends Controller_Template
{

	public function action_index()
	{
		$data['prices'] = Model_Price::find_all();
		$this->template->title = "Prices";
		$this->template->content = View::forge('price/index', $data);

	}


	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Price::validate('create');

			if ($val->run())
			{
				$checks = Model_Price::find_all();
				if($checks === null){
						$price = Model_Price::forge(array(
						'billboard_price' => Input::post('billboard_price'),
						'created_at' => time(),
						'updated_at' => 0,
						));

						if ($price and $price->save())
						{
							Session::set_flash('success', 'Added Billboar Price'.$price->id.'.');
							Response::redirect('price');
						}
						else
						{
							Session::set_flash('error', 'Could not save price.');
						}
				}
				else{
					foreach ($checks as $check) {
						$check->billboard_price = Input::post('billboard_price');
						if ($check->save())
						{
							Session::set_flash('success', 'Updated Billboard price');
							Response::redirect('price');
						}
						else
						{
							Session::set_flash('error', 'Nothing updated.');
						}

					}
					

				}	

				
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Prices";
		$this->template->content = View::forge('price/create');

	}

	

}
