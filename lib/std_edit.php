<?php
include "../db/conf.php";
include "../db/db.php";
$db = new Database();
if(isset($_GET["std_edit"])){
	$id = $_GET["main_id"];
	$std_id = $_GET["std_id"];
	$std_name = $_GET["std_name"];
	$std_phone = $_GET["std_phone"];
	$query = "UPDATE student SET std_id='$std_id',std_name='$std_name',std_phone='$std_phone' WHERE id='$id'";
	$insert = $db->update($query);
	if($insert){
		header("Location:../Students_info.php");
	}
}