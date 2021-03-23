<?php
	include "lib/header.php";
	if(isset($_GET["action"]) && $_GET["action"] == "edit"){
		$id = $_GET["id"];
	}else{
		header("Location:Students_info.php");
	}
	
?>
<h1>Edit student information : </h1>
<form action="lib/std_edit.php" method="get" class="edit_form">
	<?php
		$query = "SELECT * FROM student WHERE id = '$id'";
		$result = $db->select($query);
		if($result){
			while($row = mysqli_fetch_assoc($result)){
	?>
	<input type="hidden" name="main_id" value="<?php echo $row['id'] ?>">
	<input type="number" name="std_id" placeholder="Student Id" value="<?php echo $row['std_id']?>">
	<input type="text" name="std_name" placeholder="Student Name" value="<?php echo $row['std_name']?>">
	<input type="number" name="std_phone" placeholder="Student Phone Number" value="<?php echo $row['std_phone']?>">
	<?php
			}
		}
	?>
	<input type="submit" name="std_edit" value="Save">

</form>
<?php
	include "lib/footer.php";
?>