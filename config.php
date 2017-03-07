<?php
$host 		= 'localhost';
$username = 'naomi_blog';
$password = 'SftaeE52AtKTxCAd';
$database = 'melissa_ratings';
//connect
$db = new mysqli( $host, $username, $password, $database );

if( $db->connect_errno > 0 ){
	die('Unable to connect to the Database.');
}
error_reporting( E_ALL & ~E_NOTICE );
