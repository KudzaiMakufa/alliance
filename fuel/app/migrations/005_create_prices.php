<?php

namespace Fuel\Migrations;

class Create_prices
{
	public function up()
	{
		\DBUtil::create_table('prices', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'billboard_price' => array('null' => false, 'type' => 'double'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('prices');
	}
}