<?php

session_start();

try
{
	$bdd = new PDO('mysql:host=mysql1.alwaysdata.com;dbname=awesomeduckness_db', '85523','ldfsjleed');
	
}
catch(exception $e)
{
	echo "erreur bdd: ".$e->getMessage();
}

?>


<?php



?>