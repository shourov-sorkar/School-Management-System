<?php
	include 'db/session.php';
	Session::checkSession();
	include "db/conf.php";
	include "db/db.php";
	$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student information</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/student.css">
</head>
<body>