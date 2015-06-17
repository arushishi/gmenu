<?php

class Controller_Image extends Controller_Base
{

	public function before()
	{
		parent::before();
		Config::load('upload', true);
	}

	public function action_index()
	{
		$data['images'] = Model_Image::find('all');
		$this->template->title = "Images";
		$this->template->content = View::forge('image/index', $data);
	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('image');

		if (!$data['image'] = Model_Image::find($id))
		{
			Session::set_flash('error', 'Could not find image #' . $id);
			Response::redirect('image');
		}

		$this->template->title = "Image";
		$this->template->content = View::forge('image/view', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Image::validate('create');

			if ($val->run())
			{
				$image = Model_Image::forge(array(
						'name' => Input::post('name'),
						'group' => Input::post('group'),
						'url' => Input::post('url'),
						'md5_hash' => Input::post('md5_hash'),
				));

				if ($image and $image->save())
				{
					Session::set_flash('success', 'Added image #' . $image->id . '.');

					Response::redirect('image');
				} else
				{
					Session::set_flash('error', 'Could not save image.');
				}
			} else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Images";
		$this->template->content = View::forge('image/create');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('image');

		if (!$image = Model_Image::find($id))
		{
			Session::set_flash('error', 'Could not find image #' . $id);
			Response::redirect('image');
		}

		$val = Model_Image::validate('edit');

		if ($val->run())
		{
			$image->name = Input::post('name');
			$image->group = Input::post('group');
			$image->url = Input::post('url');
			$image->md5_hash = Input::post('md5_hash');

			if ($image->save())
			{
				Session::set_flash('success', 'Updated image #' . $id);

				Response::redirect('image');
			} else
			{
				Session::set_flash('error', 'Could not update image #' . $id);
			}
		} else
		{
			if (Input::method() == 'POST')
			{
				$image->name = $val->validated('name');
				$image->group = $val->validated('group');
				$image->url = $val->validated('url');
				$image->md5_hash = $val->validated('md5_hash');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('image', $image, false);
		}

		$this->template->title = "Images";
		$this->template->content = View::forge('image/edit');
	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('image');

		if ($image = Model_Image::find($id))
		{
			$image->delete();

			Session::set_flash('success', 'Deleted image #' . $id);
		} else
		{
			Session::set_flash('error', 'Could not delete image #' . $id);
		}

		Response::redirect('image');
	}

}
