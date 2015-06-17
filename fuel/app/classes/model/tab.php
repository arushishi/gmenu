<?php

use Orm\Model;

class Model_Tab extends Model
{

	protected static $_properties = array(
		'id',
		'school_id',
		'tab_index',
		'tab_name',
		'image_on',
		'image_off',
		'image_hash_on',
		'image_hash_off',
		'tab_kind',
		'url',
		'row_num',
		'column_num',
		'start_date',
		'end_date',
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
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('school_id', 'School Id', 'required|valid_string[numeric]');
		$val->add_field('tab_index', 'Tab Index', 'required|valid_string[numeric]');
		$val->add_field('tab_name', 'Tab Name', 'required|max_length[255]');
		//$val->add_field('image_on', 'Image On', 'required|max_length[255]');
		//$val->add_field('image_off', 'Image Off', 'required|max_length[255]');
		//$val->add_field('image_hash_on', 'Image Hash On', 'required|max_length[255]');
		//$val->add_field('image_hash_off', 'Image Hash Off', 'required|max_length[255]');
		$val->add_field('tab_kind', 'Tab Kind', 'required|max_length[255]');
		//$val->add_field('url', 'Url', 'required|max_length[255]');
		//$val->add_field('row_num', 'Row Num', 'required|valid_string[numeric]');
		//$val->add_field('column_num', 'Column Num', 'required|valid_string[numeric]');
		$val->add_field('start_date', 'Start Date', 'required');
		$val->add_field('end_date', 'End Date', 'required');

		return $val;
	}

}
