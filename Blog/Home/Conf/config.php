<?php
return array(
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
    'news/:year/:month/:day' => array('News/archive', 'status=1'),
    'news/:id'               => 'Home/Index/read',
    'news/read/:id'          => 'Home/Index/aaa/:1',
),

	'URL_MODEL'       => 4,
);