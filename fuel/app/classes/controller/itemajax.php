<?php

class Controller_Itemajax extends Controller_Rest
{

	public function post_exec()
	{
		$items = "";
		if (isset($_POST['tabid']) && isset($_POST['rownum']) && isset($_POST['columnnum']))
		{
			$items = Model_Item::find("all", array(
					'where' => array(array('tab_id', $_POST['tabid']), array('item_row', $_POST['rownum']), array('item_column', $_POST['columnnum'])),
					'order_by' => array('start_date')
			));
		}

		$view = View::forge('item/index_1');
		$render = $view->set('items', $items)->render();

		// レスポンス出力
		$result = array(
			'result' => 'OK',
			//'schoolname' => $schoolname,
			'items' => $render,
		);
		return $this->response($result);
	}

}
