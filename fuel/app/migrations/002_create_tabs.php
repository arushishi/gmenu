<?php

namespace Fuel\Migrations;

class Create_tabs
{

	public function up()
	{
		\DBUtil::create_table('tabs', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'school_id' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'tab_index' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'tab_name' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_on' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_off' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_hash_on' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'image_hash_off' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'tab_kind' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'url' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'row_no' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'column_no' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'start_date' => array('type' => 'datetime', 'null' => true),
			'end_date' => array('type' => 'datetime', 'null' => true),
			'create_date' => array('type' => 'timestamp', 'null' => true),
			'update_date' => array('type' => 'timestamp', 'null' => true),
			), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('tabs');
	}

}
