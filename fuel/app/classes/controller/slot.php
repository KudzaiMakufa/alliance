<?php
class Controller_Slot extends Controller_Template
{

	public function action_index()
	{
		$data['slots'] = Model_Slot::find_all();
		$this->template->title = "Slots";
		$this->template->content = View::forge('slot/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('slot');

		$data['slot'] = Model_Slot::find_by_pk($id);

		$this->template->title = "Slot";
		$this->template->content = View::forge('slot/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Slot::validate('create');

			if ($val->run())
			{
				$slot = Model_Slot::forge(array(
					'place' => Input::post('place'),
					'occupied' => Input::post('occupied'),
					'created_at' => time(),
					'updated_at' => 0,
				));

				if ($slot and $slot->save())
				{
					Session::set_flash('success', 'Added slot #'.$slot->id.'.');
					Response::redirect('slot');
				}
				else
				{
					Session::set_flash('error', 'Could not save slot.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Slots";
		$this->template->content = View::forge('slot/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('slot');

		$slot = Model_Slot::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			
			if(Input::post('occupied') == "0"){
				Session::set_flash('error', 'Select slot status');
			}
			else{

		
			
				$slot->occupied = Input::post('occupied');

				if ($slot->save())
				{
					Session::set_flash('success', 'slot status updated to '.Input::post('occupied'));
					Response::redirect('slot');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
		
		}

		$this->template->set_global('slot', $slot, false);
		$this->template->title = "Slots";
		$this->template->content = View::forge('slot/edit');

	}

	public function action_delete($id = null)
	{
		if ($slot = Model_Slot::find_one_by_id($id))
		{
			$slot->delete();

			Session::set_flash('success', 'Deleted slot #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete slot #'.$id);
		}

		Response::redirect('slot');

	}

}
