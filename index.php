<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
session_start();

?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="awesomeducksheet.css" />
	</head>
	<title>ADN</title>
	<body>
		
		<?php include("banner.php"); ?>
		
		
		
		<?php
		
			//Déjà connecté
			if( isset($_SESSION['pseudo'] ) )
			{
				header('location: accueil.php');
			
			}
			else
			{
			
				echo "</br></br><header></br>";
				include('connexion.php');
				//echo "Pas encore inscrit ?";
				echo "</header></br>";
				echo "<img src='image/duck.png'>";

				
			
			}
		
		?>
		
	
		
		<?php include('footer.php'); ?>
	</body>
	


</html>