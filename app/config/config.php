<?php
//Database params
define('DB_HOST',$_SERVER['SERVER_NAME']);
define('DB_NAME','ecomphp');
define('DB_USER','root');
define('DB_PASS','');
define('DB_CHARSET','utf8');
define('DB_PORT',3308);

//APPROOT
define("APPROOT",dirname(__DIR__));

//URL
define('URLROOT',$_SERVER["HTTP_HOST"].'/MVCPHP');
//print_r($_SERVER);
