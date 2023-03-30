<?php
define('DB_SERVER', 'localhost'); // DB SERVER
define('DB_USER', 'root');// DATABASE USER NAME
define('DB_PASS',''); // DEAFULT NULL 
define('DB_NAME', 'blood_bank'); // DEFINE  constant AS NAME BLOOD BANK
$con =mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); // BLOOD BANK
if($con === false)
{
	die("error : could not connect".mysqli_connect_error());
}
?>