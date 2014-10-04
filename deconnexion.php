<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
session_destroy();

?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="awesomeducksheet.css" />
		<title></title>
	</head>
	<?php 
	include("banner.php");
	header("location: index.php");
	?>
	
	<body>
		
		
	</body>
	


</html>