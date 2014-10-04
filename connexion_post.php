<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=mysql1.alwaysdata.com;dbname=awesomeducknest_db','85523','ldfsjleed');
}
catch(Exception $e)
{
	echo "erreur bdd: ".$e->getMessage();
}
?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="awesomeducksheet.css" />
		<title>INSCRIPTION</title>
	</head>
	
	<?php include("banner.php");?>
	
	<?php
	
			
	if( isset($_POST['pseudo'])
	&&  isset($_POST['mdp'])
	)
	{
		$nb=0;
		$mdp="";
		$requ=$bdd->prepare('SELECT * FROM UTILISATEUR WHERE Pseudo = ?');
		$requ->execute(array( $_POST['pseudo'] ));
		while($donnees=$requ->fetch())
		{
			$nb++;
			$mdp=$donnees['Mdp'];
		}
		
		if($nb==1 && $mdp==$_POST['mdp'])
		{
			
			$_SESSION['pseudo']=$_POST['pseudo'];
			header("location: accueil.php");
			//echo "<section><h2> Vous êtes connecté ! </h2> Vous pouvez <a href='index.php'>revenir</a> à l'accueil.</section></br>";
		}
		else
		{
			
			echo "<section> <h2>Mot-de-passe incorrect:</h2>";
			echo "Veuillez le <a href='index.php'>ressaisir</a>.</br>";
		}
			
		
	}
	else
	{
		echo "<section> <h2>Erreur de connexion:</h2>";
		if(!isset($_POST['pseudo']))echo "Veuillez indiquer votre <b>pseudo</b></br>";
		if(!isset($_POST['mdp']))echo "Veuillez indiquer votre <b>mot de passe</b></br>";
		echo "</section>";
		
	}
	
	?>
	
	
	<body>
		
		
	
		
		
	</body>
	


</html>