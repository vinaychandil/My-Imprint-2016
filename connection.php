<?php
define('DB_NAME','myimprint');
define('DB_USER',/*getenv("YEARBOOK_DB_USERNAME")*/'root');
define('DB_PASSWORD',/*getenv("YEARBOOK_DB_PASSWORD")*/''); 
define('DB_HOST','localhost');

$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
	die('could not connect:' .mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);

?>