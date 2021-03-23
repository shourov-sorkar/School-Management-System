<?php
	include "lib/header.php";
	if(isset($_GET["action"]) && $_GET["action"] == "delete"){
		$id = $_GET["id"];
		$query = "DELETE FROM student WHERE id=$id";
		$dl = $db->delete($query);
		if($dl){
			header("Location:Students_info.php");
		}
	}
	if(isset($_GET["logout"])){
		Session::destroy();
	}
?>		
		<a href="Students_info.php?logout" class="logOut">Log out</a>
		<h1>Student information:</h1>
		<table border="2">
			<thead>
				<tr>
					<th>Student ID</th>
					<th>Student Name</th>
					<th>Student Phone</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query  = "select * FROM student";
					$result = $db->select($query);
					if($result){
						while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row["std_id"]?></td>
					<td><?php echo $row["std_name"]?></td>
					<td><?php echo $row["std_phone"]?></td>
					
					<td class="action">
						<a href="student_edit.php?action=edit&id=<?php echo $row['id']?>">Edit</a>
						<a href="?action=delete&id=<?php echo $row['id']?>">Delete</a>
					</td>
				</tr>
				<?php
						}
					}
				?>
			</tbody>
		</table>
<?php
	include "lib/footer.php";
?>