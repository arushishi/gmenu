<?php

namespace Fuel\Migrations;

class Create_schoolinfos
{

	public function up()
	{
		\DBUtil::create_table('schoolinfos', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'schoolid' => array('constraint' => 11, 'type' => 'int'),
			'schoolname' => array('constraint' => 255, 'type' => 'varchar'),
			'usegmenuflg' => array('constraint' => 11, 'type' => 'int'),
			'create_date' => array('type' => 'timestamp', 'null' => true),
			'update_date' => array('type' => 'timestamp', 'null' => true),
			), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('schoolinfos');
	}

}
