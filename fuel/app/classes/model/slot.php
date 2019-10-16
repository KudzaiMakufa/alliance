<?php
class Model_Slot extends Model_Crud
{
	protected static $_table_name = 'slots';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('place', 'Place', 'required|max_length[255]');
		$val->add_field('occupied', 'Occupied', 'required|max_length[255]');

		return $val;
	}

}
