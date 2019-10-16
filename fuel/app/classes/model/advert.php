<?php
class Model_Advert extends Model_Crud
{
	protected static $_table_name = 'adverts';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('organisation', 'Organisation', 'required|max_length[255]');
		$val->add_field('location', 'Location', 'required|max_length[255]');
		$val->add_field('duration', 'Duration', 'required');
		$val->add_field('start_date', 'Start Date', 'required|max_length[255]');
	//	$val->add_field('price', 'Price', 'required');

		return $val;
	}

}
