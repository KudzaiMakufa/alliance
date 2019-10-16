<?php

namespace Fuel\Migrations;

class Create_adverts
{
	public function up()
	{
		\DBUtil::create_table('adverts', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'organisation' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'location' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'duration' => array('null' => false, 'type' => 'double'),
			'start_date' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'price' => array('null' => false, 'type' => 'double'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('adverts');
	}
}