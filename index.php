<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',True);
define('APP_PATH','./Blog/');
define("LANG_PATH", "./Blog/Lang/");
define('DIR_SECURE_FILENAME', 'index.html');
define('DIR_SECURE_CONTENT', 'No direct script access allowed!');
define('SITE_URL', 'http://localhost:8888/Blog');

define('CSS_URL',SITE_URL.'/Home/Template/css');
define('JS_URL',SITE_URL.'/Home/Template/js');
define('IMAGES_URL',SITE_URL.'/Home/Template/images');

define('ADMIN_CSS_URL', SITE_URL.'/Admin/Template/css');
define('ADMIN_JS_URL', SITE_URL.'/Admin/Template/js');
define('ADMIN_IMAGES_URL', SITE_URL.'/Admin/Template/images');

define('ADMIN_SRC','./Index');
require './Core/ThinkPHP.php';