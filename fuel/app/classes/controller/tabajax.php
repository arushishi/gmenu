<?php

class Controller_Tabajax extends Controller_Rest
{

	public function post_exec()
	{
		$tabs = "";
		if (isset($_POST['schoolid']))
		{
			$tabs = Model_Tab::find("all", array(
					'where' => array(array('school_id', $_POST['schoolid'])),
					'order_by' => array('id')
			));
		}

		$schoolname = "";
		if (isset($_POST['schoolname']))
		{
			$schoolname = $_POST['schoolname'];
		}

		$view = View::forge('tab/index');
		$render = $view->set('tabs', $tabs)->render();
		/*
		 */
		// レスポンス出力
		$result = array(
			'result' => 'OK',
			//'schoolname' => $schoolname,
			'tabs' => $render,
		);
		return $this->response($result);
	}

}
