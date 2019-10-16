<?php
class Model_Price extends Model_Crud
{
	protected static $_table_name = 'prices';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('billboard_price', 'Billboard Price', 'required');

		return $val;
	}

}
