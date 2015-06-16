<?php

return array(
	'_root_' => 'admin', // The default route
	'_404_' => 'welcome/404', // The main 404 route
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
// 正規表現によるルーティング
	'bbs/(:any)' => 'routingtest/entry/$1', // (1)
	'(:segment)/about' => 'routingtest/about/$1', // (2)
	'([0-9]{3})/detail' => 'routingtest/id/$1', // (3)
);
