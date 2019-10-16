<?php

namespace Fuel\Migrations;

class Create_advertisers
{
	public function up()
	{
		\DBUtil::create_table('advertisers', array(
			'id' => array('type' => 'int', 'unsigned' => true, 'null' => false, 'auto_increment' => true, 'constraint' => '11'),
			'first_name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'last_name' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'organisation' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'organisation_address' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'phone_number' => array('null' => false, 'type' => 'double'),
			'email' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'password' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'password2' => array('constraint' => '255', 'null' => false, 'type' => 'varchar'),
			'created_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
			'updated_at' => array('constraint' => '11', 'null' => false, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('advertisers');
	}
}