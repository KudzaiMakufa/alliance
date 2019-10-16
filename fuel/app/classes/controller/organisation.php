<?php
class Controller_Organisation extends Controller_Template
{

	public function action_index()
	{
		// $data['organisations'] = Model_Organisation::find_all();
		// $this->template->title = "Organisations";
		// $this->template->content = View::forge('organisation/index', $data);

	}

	public function action_view($id = null)
	{
		// is_null($id) and Response::redirect('organisation');

		// $data['organisation'] = Model_Organisation::find_by_pk($id);

		// $this->template->title = "Organisation";
		// $this->template->content = View::forge('organisation/view', $data);

	}

	public function action_create()
	{
		// if (Input::method() == 'POST')
		// {
		// 	$val = Model_Organisation::validate('create');

		// 	if ($val->run())
		// 	{
		// 		$organisation = Model_Organisation::forge(array(
		// 			'name' => Input::post('name'),
		// 		));

		// 		if ($organisation and $organisation->save())
		// 		{
		// 			Session::set_flash('success', 'Added organisation #'.$organisation->id.'.');
		// 			Response::redirect('organisation');
		// 		}
		// 		else
		// 		{
		// 			Session::set_flash('error', 'Could not save organisation.');
		// 		}
		// 	}
		// 	else
		// 	{
		// 		Session::set_flash('error', $val->error());
		// 	}
		}

		$this->template->title = "Organisations";
		$this->template->content = View::forge('organisation/create');

	}

	public function action_edit($id = null)
	{
		// is_null($id) and Response::redirect('organisation');

		// $organisation = Model_Organisation::find_one_by_id($id);

		// if (Input::method() == 'POST')
		// {
		// 	$val = Model_Organisation::validate('edit');

		// 	if ($val->run())
		// 	{
		// 		$organisation->name = Input::post('name');

		// 		if ($organisation->save())
		// 		{
		// 			Session::set_flash('success', 'Updated organisation #'.$id);
		// 			Response::redirect('organisation');
		// 		}
		// 		else
		// 		{
		// 			Session::set_flash('error', 'Nothing updated.');
		// 		}
		// 	}
		// 	else
		// 	{
		// 		Session::set_flash('error', $val->error());
		// 	}
		}

		$this->template->set_global('organisation', $organisation, false);
		$this->template->title = "Organisations";
		$this->template->content = View::forge('organisation/edit');

	}

	public function action_delete($id = null)
	{
		// if ($organisation = Model_Organisation::find_one_by_id($id))
		// {
		// 	$organisation->delete();

		// 	Session::set_flash('success', 'Deleted organisation #'.$id);
		// }

		// else
		// {
		// 	Session::set_flash('error', 'Could not delete organisation #'.$id);
		// }

		// Response::redirect('organisation');

	}

}
