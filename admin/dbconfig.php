<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // DB username
define('DB_PASSWORD', '');    // DB password
define('DB_DATABASE', 'entrance');      // DB name
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysqli_select_db($connection ,DB_DATABASE) or die( mysqli_error()."Unable to select database");
?>