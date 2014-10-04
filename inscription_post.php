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
	$pseudoExiste=false;
	$requ=$bdd->query('SELECT * FROM UTILISATEUR');
	while($donnees=$requ->fetch())
	{
	
		if($donnees['Pseudo']==$_POST['pseudo'])
		{
			$pseudoExiste=true;
		}
	
	}
			
	if( isset($_POST['pseudo'])
	&&  isset($_POST['mdp1'])
	&&  isset($_POST['mdp2'])
	&&  isset($_POST['nom'])
	&&  isset($_POST['prenom'])
	&&  isset($_POST['mail'])
	&&  isset($_POST['dateNaissance'])
	)
	{
		if($_POST['pseudo'] != ""
		&& $_POST['mdp1'] == $_POST['mdp2']
		&& $_POST['mdp1'] != ""
		&& $_POST['nom'] != ""
		&& $_POST['prenom'] != ""
		&& $_POST['mail'] != ""
		&& $_POST['dateNaissance'] != ""
		&& strlen( $_POST['dateNaissance']) == 8
		&& $pseudoExiste==false)
		{
		///TOUT VA BIEN
			
		
			$req=$bdd->prepare('INSERT INTO UTILISATEUR(Pseudo,Mdp,Nom,Prenom,Mail,DateNaissance) VALUES(:p,:m,:n,:pr,:ma,:d)');
			$req->execute(array(
			'p' => htmlspecialchars($_POST['pseudo']),
			'm' => htmlspecialchars($_POST['mdp1']),
			'n' => htmlspecialchars($_POST['nom']),
			'pr' => htmlspecialchars($_POST['prenom']),
			'ma' => htmlspecialchars($_POST['mail']),
			'd' => htmlspecialchars($_POST['dateNaissance'])
			));
			
			echo "</br><section> Vous êtes bien inscris ! </section";
			$_SESSION['pseudo']=$_POST['pseudo'];
			
		///
		}
		else
		{
			echo "<section> <h2>Erreur d'inscription:</h2>";
			if($_POST['pseudo'] == "")echo "Veuillez indiquer votre <b>pseudo</b></br>";
			if($_POST['mdp1'] == "")echo "Veuillez indiquer un <b>mot de passe</b></br>";
			if($_POST['mdp1'] != $_POST['mdp2'])echo "Veuillez indiquer des mots de passes <b>identique</b></br>";
			if($_POST['nom'] == "")echo "Veuillez indiquer votre <b>nom</b></br>";
			if($_POST['prenom'] == "")echo "Veuillez indiquer votre <b>prénom</b></br>";
			if($_POST['mail'] == "")echo "Veuillez indiquer votre <b>adresse mail</b></br>";
			if($_POST['dateDeNaissance'] == "")echo "Veuillez indiquer votre <b>date de naissance</b></br>";
			if(strlen( $_POST['dateNaissance']) != 8)echo "Veuillez indiquer un <b>format de date</b> correct</br>";
			if($pseudoExiste==true)echo $_POST['pseudo']." est <b>déjà pris</b>.</br>";
			echo "</section>";
		}
	}
	
	?>
	
	
	<body>
		
		
	
		
		
	</body>
	


</html>