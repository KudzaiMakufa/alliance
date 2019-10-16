<?php
class Model_Advertiser extends Model_Crud
{
	protected static $_table_name = 'advertisers';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('first_name', 'First Name', 'required|max_length[255]');
		$val->add_field('last_name', 'Last Name', 'required|max_length[255]');
		$val->add_field('organisation', 'Organisation', 'required|max_length[255]');
		$val->add_field('organisation_address', 'Organisation Address', 'required|max_length[255]');
		$val->add_field('phone_number', 'Phone Number', 'required');
		$val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
		$val->add_field('password', 'Password', 'required|max_length[255]');
		

		return $val;
	}

}
