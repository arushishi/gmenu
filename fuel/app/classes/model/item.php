<?php

use Orm\Model;

class Model_Item extends Model
{

	protected static $_properties = array(
		'id',
		'tab_id',
		'item_row',
		'item_column',
		'item_name',
		'image_on',
		'image_off',
		'image_hash_on',
		'image_hash_off',
		'url',
		'sso_flg',
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
		$val->add_field('tab_id', 'Tab Id', 'required|valid_string[numeric]');
		$val->add_field('item_row', 'Item Row', 'required|valid_string[numeric]');
		$val->add_field('item_column', 'Item Column', 'required|valid_string[numeric]');
		$val->add_field('item_name', 'Item Name', 'required|max_length[255]');
		$val->add_field('image_on', 'Image On', 'required|max_length[255]');
		$val->add_field('image_off', 'Image Off', 'required|max_length[255]');
		$val->add_field('image_hash_on', 'Image Hash On', 'required|max_length[255]');
		$val->add_field('image_hash_off', 'Image Hash Off', 'required|max_length[255]');
		$val->add_field('url', 'Url', 'required|max_length[255]');
		$val->add_field('sso_flg', 'Sso Flg', 'required|valid_string[numeric]');
		$val->add_field('start_date', 'Start Date', 'required');
		$val->add_field('end_date', 'End Date', 'required');

		return $val;
	}

}
