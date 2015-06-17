<?php

namespace Fuel\Migrations;

class Create_items
{

	public function up()
	{
		\DBUtil::create_table('items', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tab_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'item_row' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'item_column' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'item_name' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_on' => array('constraint' => 2048, 'type' => 'varchar', 'null' => true),
			'image_off' => array('constraint' => 2048, 'type' => 'varchar', 'null' => true),
			'image_hash_on' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_hash_off' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'url' => array('constraint' => 2048, 'type' => 'varchar', 'null' => true),
			'sso_flg' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'start_date' => array('type' => 'datetime', 'null' => true),
			'end_date' => array('type' => 'datetime', 'null' => true),
			'create_date' => array('type' => 'timestamp', 'null' => true),
			'update_date' => array('type' => 'timestamp', 'null' => true),
			), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('items');
	}

}
