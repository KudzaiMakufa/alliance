<?php

class Controller_Dashboard extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Dashboard &raquo; Index';
		$this->template->content = View::forge('dashboard/index', $data);
	}

	public function action_action()
	{
		$data["subnav"] = array('action'=> 'active' );
		$this->template->title = 'Dashboard &raquo; Action';
		$this->template->content = View::forge('dashboard/action', $data);
	}

}
