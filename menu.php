<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php session_start();?>

<p>
<?php
	if( isset($_SESSION['pseudo']) )
	{
		echo "Canard <b>".htmlspecialchars($_SESSION['pseudo'])."</b>.";
	}
	else echo "Canard <b>visiteur</b>";
?>
</p>

<p>
<?php

if( isset($_SESSION['pseudo']) )
{
	echo "<a href='deconnexion.php'>Quitter le nid</a></br>";
}
else
{
	echo "<a href='inscription.php'>Rejoindre le nid</a></br>";
	echo "<a href='connexion.php'>Entrer dans le nid</a>";
}

?>
</p>

