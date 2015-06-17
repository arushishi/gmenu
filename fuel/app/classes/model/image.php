<?php

use Orm\Model;

class Model_Image extends Model
{

	protected static $_properties = array(
		'id',
		'name',
		'group',
		'url',
		'md5_hash',
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
			'events' => array('before_save'),
			'mysql_timestamp' => true,
			'property' => 'update_date',
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('group', 'Group', 'required|max_length[255]');
		$val->add_field('url', 'Url', 'required|max_length[2048]');
		$val->add_field('md5_hash', 'Md5 Hash', 'required|max_length[255]');

		return $val;
	}

}
