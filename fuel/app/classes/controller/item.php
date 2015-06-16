<?php

class Controller_Item extends Controller_Base
{

	public function action_index()
	{
		$data['items'] = Model_Item::find('all');
		$this->template->title = "Items";
		$this->template->content = View::forge('item/index', $data);
	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('item');

		if (!$data['item'] = Model_Item::find($id))
		{
			Session::set_flash('error', 'Could not find item #' . $id);
			Response::redirect('item');
		}

		$this->template->title = "Item";
		$this->template->content = View::forge('item/view', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Item::validate('create');

			if ($val->run())
			{
				$item = Model_Item::forge(array(
						'tab_id' => Input::post('tab_id'),
						'item_row' => Input::post('item_row'),
						'item_column' => Input::post('item_column'),
						'item_name' => Input::post('item_name'),
						'image_on' => Input::post('image_on'),
						'image_off' => Input::post('image_off'),
						'image_hash_on' => Input::post('image_hash_on'),
						'image_hash_off' => Input::post('image_hash_off'),
						'url' => Input::post('url'),
						'sso_flg' => Input::post('sso_flg'),
						'start_date' => Input::post('start_date'),
						'end_date' => Input::post('end_date'),
				));

				if ($item and $item->save())
				{
					Session::set_flash('success', 'Added item #' . $item->id . '.');

					Response::redirect('item');
				} else
				{
					Session::set_flash('error', 'Could not save item.');
				}
			} else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Items";
		$this->template->content = View::forge('item/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('item');

		if (!$item = Model_Item::find($id))
		{
			Session::set_flash('error', 'Could not find item #' . $id);
			Response::redirect('item');
		}

		$val = Model_Item::validate('edit');

		if ($val->run())
		{
			$item->tab_id = Input::post('tab_id');
			$item->item_row = Input::post('item_row');
			$item->item_column = Input::post('item_column');
			$item->item_name = Input::post('item_name');
			$item->image_on = Input::post('image_on');
			$item->image_off = Input::post('image_off');
			$item->image_hash_on = Input::post('image_hash_on');
			$item->image_hash_off = Input::post('image_hash_off');
			$item->url = Input::post('url');
			$item->sso_flg = Input::post('sso_flg');
			$item->start_date = Input::post('start_date');
			$item->end_date = Input::post('end_date');

			if ($item->save())
			{
				Session::set_flash('success', 'Updated item #' . $id);

				Response::redirect('item');
			} else
			{
				Session::set_flash('error', 'Could not update item #' . $id);
			}
		} else
		{
			if (Input::method() == 'POST')
			{
				$item->tab_id = $val->validated('tab_id');
				$item->item_row = $val->validated('item_row');
				$item->item_column = $val->validated('item_column');
				$item->item_name = $val->validated('item_name');
				$item->image_on = $val->validated('image_on');
				$item->image_off = $val->validated('image_off');
				$item->image_hash_on = $val->validated('image_hash_on');
				$item->image_hash_off = $val->validated('image_hash_off');
				$item->url = $val->validated('url');
				$item->sso_flg = $val->validated('sso_flg');
				$item->start_date = $val->validated('start_date');
				$item->end_date = $val->validated('end_date');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('item', $item, false);
		}

		$this->template->title = "Items";
		$this->template->content = View::forge('item/edit');
	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('item');

		if ($item = Model_Item::find($id))
		{
			$item->delete();

			Session::set_flash('success', 'Deleted item #' . $id);
		} else
		{
			Session::set_flash('error', 'Could not delete item #' . $id);
		}

		Response::redirect('item');
	}

}
