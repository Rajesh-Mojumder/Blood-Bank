<?php
  ob_start(); // SHUVRO
  session_start();
  ob_end_clean();
	$db=new PDO('mysql:host=localhost;dbname=blood_bank','root','');
	if($db)
	{
			echo "";
	}
	else
	{
			echo "";
	}
	?>