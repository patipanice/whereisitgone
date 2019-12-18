<?php
define('servername', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'u742683457_g18');
$objCon = mysqli_connect(servername, username, password, dbname);
mysqli_set_charset($objCon,"utf8");
?>