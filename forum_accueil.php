<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php session_start(); ?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="awesomeducksheet.css" />
		<title>FORUM</title>
	</head>
	
	<body>
		
		<?php include("banner.php"); ?>
		
		<nav>
			<?php include("menu.php"); ?>
		</nav>

		<section>
			<h2>Listes des Forums disponibles</h2>
			<section>
				<?php include("forum_liste.php"); ?>
			</section>
			
		</section>

		<?php include("footer.php"); ?>
	</body>

</html>