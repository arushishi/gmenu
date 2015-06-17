<?php

class Controller_Tab extends Controller_Base
{

	public function action_index()
	{
		// select要素情報収集（DB）
		$tmp = Model_Schoolinfo::find("all", array(
				'where' => array(array('usegmenuflg', 1)),
				'order_by' => array('schoolid')
		));

		// select要素作成
		$data['schoolinfos'][''] = ""; //空要素
		foreach ($tmp as $value)
		{
			$data['schoolinfos'][$value['schoolid']] = $value['schoolname'];
		}
		//$data['id'] = $id;
		//
		$this->template->title = "塾種別選択";
		$this->template->content = View::forge('index', $data);
	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('tab');

		if (!$data['tab'] = Model_Tab::find($id))
		{
			Session::set_flash('error', 'Could not find tab #' . $id);
			Response::redirect('tab');
		}

		$this->template->title = "Tab";
		$this->template->content = View::forge('tab/view', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Tab::validate('create');

			if ($val->run())
			{
				$tab = Model_Tab::forge(array(
						'id' => Input::post('id'),
						'school_id' => Input::post('school_id'),
						'tab_index' => Input::post('tab_index'),
						'tab_name' => Input::post('tab_name'),
						'image_on' => Input::post('image_on'),
						'image_off' => Input::post('image_off'),
						'image_hash_on' => Input::post('image_hash_on'),
						'image_hash_off' => Input::post('image_hash_off'),
						'tab_kind' => Input::post('tab_kind'),
						'url' => Input::post('url'),
						'row_num' => Input::post('row_num'),
						'column_num' => Input::post('column_num'),
						'start_date' => Input::post('start_date'),
						'end_date' => Input::post('end_date'),
				));

				if ($tab and $tab->save())
				{
					Session::set_flash('success', 'Added tab #' . $tab->id . '.');

					Response::redirect('tab');
				} else
				{
					Session::set_flash('error', 'Could not save tab.');
				}
			} else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Tabs";
		$this->template->content = View::forge('tab/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('tab');

		if (!$tab = Model_Tab::find($id))
		{
			Session::set_flash('error', 'Could not find tab #' . $id);
			Response::redirect('tab');
		}

		$val = Model_Tab::validate('edit');

		if ($val->run())
		{
			$tab->id = Input::post('id');
			$tab->school_id = Input::post('school_id');
			$tab->tab_index = Input::post('tab_index');
			$tab->tab_name = Input::post('tab_name');
			$tab->image_on = Input::post('image_on');
			$tab->image_off = Input::post('image_off');
			$tab->image_hash_on = Input::post('image_hash_on');
			$tab->image_hash_off = Input::post('image_hash_off');
			$tab->tab_kind = Input::post('tab_kind');
			$tab->url = Input::post('url');
			$tab->row_num = Input::post('row_num');
			$tab->column_num = Input::post('column_num');
			$tab->start_date = Input::post('start_date');
			$tab->end_date = Input::post('end_date');

			if ($tab->save())
			{
				Session::set_flash('success', 'Updated tab #' . $id);

				Response::redirect('tab');
			} else
			{
				Session::set_flash('error', 'Could not update tab #' . $id);
			}
		} else
		{
			if (Input::method() == 'POST')
			{
				$tab->id = $val->validated('id');
				$tab->school_id = $val->validated('school_id');
				$tab->tab_index = $val->validated('tab_index');
				$tab->tab_name = $val->validated('tab_name');
				$tab->image_on = $val->validated('image_on');
				$tab->image_off = $val->validated('image_off');
				$tab->image_hash_on = $val->validated('image_hash_on');
				$tab->image_hash_off = $val->validated('image_hash_off');
				$tab->tab_kind = $val->validated('tab_kind');
				$tab->url = $val->validated('url');
				$tab->row_num = $val->validated('row_num');
				$tab->column_num = $val->validated('column_num');
				$tab->start_date = $val->validated('start_date');
				$tab->end_date = $val->validated('end_date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('tab', $tab, false);
		}

		$this->template->title = "Tabs";
		$this->template->content = View::forge('tab/edit');
	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('tab');

		if ($tab = Model_Tab::find($id))
		{
			$tab->delete();

			Session::set_flash('success', 'Deleted tab #' . $id);
		} else
		{
			Session::set_flash('error', 'Could not delete tab #' . $id);
		}

		Response::redirect('tab');
	}

}
