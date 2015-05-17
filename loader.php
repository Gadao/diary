<?php
require_once('config.php');
require_once('base_function.php');

# 建立資料庫連線
global $db;
$db = new PDO(
    'mysql:host='.DB_HOST.';dbname='.DB_NAME.';',
    DB_USERNAME, DB_PASSWORD,
    array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" ));

start_session(3600);

