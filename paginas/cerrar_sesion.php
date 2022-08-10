<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title> </title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location:../Ing_sis.php");
		?>
	</body>
</html>