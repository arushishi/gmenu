<?php

class Model_Schoolinfo extends \Orm\Model
{

	protected static $_properties = array(
		'id',
		'schoolid',
		'schoolname',
		'usegmenuflg',
		'create_date',
		'update_date',
	);
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
			'property' => 'create_date',
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => true,
			'property' => 'update_date',
		),
	);
	protected static $_table_name = 'schoolinfos';

}
