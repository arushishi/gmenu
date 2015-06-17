<?php

namespace Fuel\Migrations;

class Create_images
{

	public function up()
	{
		\DBUtil::create_table('images', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 255, 'type' => 'varchar'),
			'url' => array('constraint' => 2048, 'type' => 'varchar'),
			'md5_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'create_date' => array('type' => 'timestamp', 'null' => true),
			'update_date' => array('type' => 'timestamp', 'null' => true),
			), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('images');
	}

}
