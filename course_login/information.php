<?php
    include "db/conf.php";
    include "db/db.php";
    include "db/session.php";
    Session::checkSession();
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $id = $_POST["id"];
      $name = $_POST["name"];
      $desi = $_POST["desi"];
      $addr = $_POST["addr"];
      $phone = $_POST["phone"];
      $query = "INSERT INTO empl_info(`empl_id`, `empl_name`, `empl_desi`, `empl_addr`, `empl_phone`) VALUES ($id,'$name','$desi','$addr','$phone')";
      $result = $db->insert($query);
      if($result == true){
        header("Location:information.php?msg='Information insert successful.'");
      }else{
        header("Location:information.php?msg='Something is wrong! Please try again.'");
      }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>information</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
table{
  background : white;
  width: 75%;
  margin : auto;
}
tr td, tr th{
  border : 1px solid;
  color:black;
}
</style>
	
	</head>
	<body>

		<div class="main">
			 <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form><br> 

	
			<form method="post" action="information.php">
        <b>Id</b><br>
        <input id="i" type="text" name="id" required="1"><br>
          <b>Name</b><br>
        <input id="i" type="text" name="name" required="1"><br>
          <b>Designation</b><br>
        <input id="i" type="text" name="desi" required="1"><br>
          <b>Address</b><br>
        <input id="i" type="text" name="addr" required="1"><br>
            <b>Phone</b><br>
        <input id="i" type="text" name="phone" required="1"><br>
        <button type="submit" class="sub">Save</button><br><br>
      </form>
      <table>
        <thead>
          <tr>
            <th width="15%">Id</th>
            <th width="25%">Name</th>
            <th width="25%">Designation</th>
            <th width="20%">Address</th>
            <th width="15%">Phone</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM empl_info";
            $result = $db->select($query);
            if($result):
              while($row = $result->fetch_assoc()):
          ?>
            <tr>
                <td><?php echo $row["empl_id"]?></td>
                <td><?php echo $row["empl_name"]?></td>
                <td><?php echo $row["empl_desi"]?></td>
                <td><?php echo $row["empl_addr"]?></td>
                <td><?php echo $row["empl_phone"]?></td>
            </tr>
          <?php
              endwhile;
            endif;
          ?>
        </tbody>
      </table>
      <br>
			<a href="index.php"><b>Back to Home</b></a>
	    </div>
      <?php
        if(isset($_GET["msg"])){
          $msg = $_GET["msg"];
      ?>
      <script>
        window.alert(<?php echo $msg;?>);
        window.location = "information.php";
      </script>
      <?php
        }
      ?>
	</body>
</html>