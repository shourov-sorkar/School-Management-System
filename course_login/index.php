<?php
	include "db/conf.php";
	include "db/db.php";
	include "db/session.php";
	Session::checkSession();
	if(isset($_GET["logout"])){
		Session::destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class="main">
		
			<h1 >B-EXPRESS WEAR</h1><br>
			<a href="information.php"><button type="button" id="btn"><h3>Information</h3></button></a><br>
			<a href="attendance.html"><button type="button" id="btn"><h3>Attendance</h3></button></a><br>
			<a href="salary.html"><button type="button" id="btn"><h3>Salary</h3></button></a><br><br><br><br>

			<h2>Jounal Market,Sector-6<br>Copyright@Strangers</h2><br>

			
	    	<a href="index.php?logout"><button id="logout"><h3>Log Out</h3></butto></a>
	    
	    </div>
	   
	</body>
</html>