<?php

namespace Fuel\Migrations;

class Create_slots
{
	public function up()
	{
		\DBUtil::create_table('slots', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'place' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'occupied' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('slots');
	}
}