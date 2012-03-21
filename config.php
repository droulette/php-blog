<?php

$config['db_host'] = 'localhost';
$config['db_user'] = 'user';
$config['db_pass'] = '';
$config['db_name'] = 'test';

foreach ($config as $k => $v ) {
	define(strtoupper($k), $v);
}

?>