<?php

class Controller_Admin extends Controller_Base
{

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_Admin' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				$admin_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 100;
				if (!Auth::member($admin_group_id))
				{
					Auth::logout();
					Session::set_flash('error', e('アクセスが許可されて下りません。システム担当者にお問い合わせください。'));
					Response::redirect('admin/login'); //ここから
				}
			} else
			{
				Response::redirect('admin/login');
			}
		}
	}

	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('admin');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'ユーザ名')
				->add_rule('required');
			$val->add('password', 'パスワード')
				->add_rule('required');

			if ($val->run())
			{
				if (!Auth::check())
				{
					Log::info(Input::post('email') . Input::post('password'), __METHOD__);
					if (Auth::login(Input::post('email'), Input::post('password')))
					{
						// assign the user id that lasted updated this record
						foreach (\Auth::verified() as $driver)
						{
							if (($id = $driver->get_user_id()) !== false)
							{
								// credentials ok, go right in
								$current_user = Model\Auth_User::find($id[1]);
								Session::set_flash('success', e('ようこそ、 ' . $current_user->username . ' さん'));
								Response::redirect('admin');
							}
						}
					} else
					{
						$this->template->set_global('login_error', 'ログインに失敗しました');
					}
				} else
				{
					$this->template->set_global('login_error', 'Already logged in!');
				}
			}
		}

		$this->template->title = 'ログイン';
		$this->template->content = View::forge('admin/login', array('val' => $val), false);
	}

	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('admin');
	}

	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template = Request::forge('tab')->execute();
	}

}

/* End of file admin.php */
