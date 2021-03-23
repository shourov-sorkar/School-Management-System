
<?php
    include "db/conf.php";
    include "db/db.php";
    $db = new Database();
    if(isset($_POST["regSubmit"])){
        $account = $_POST["account"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        if($account == "student"){
            $insertQuery = "INSERT INTO `student_account`(`std_name`, `std_email`, `std_password`) VALUES ('$name','$email','$password')";
            $insert = $db->insert($insertQuery);
            if($insert){
                header("Location:?msg='Student registration successfull.'");
            }
            
        }else{
            $query = "INSERT INTO `facult_account`(`fc_name`, `fc_email`, `fc_password`) VALUES ('$name','$email','$password')";
            $insert = $db->insert($query);
            if($insert){
                header("Location:?msg='Teacher registration successfull.'");
            }
        }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<style>
	body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
pre, form, fieldset, input, textarea, p, blockquote, th, td { 
  padding:0;
  margin:0;}
		
fieldset, img {border:0}

ol, ul, li {list-style:none}

:focus {outline:none}

body,
input,
textarea,
select {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  color: #4c4c4c;
}

p {
  font-size: 12px;
  width: 150px;
  display: inline-block;
  margin-left: 18px;
}
h1 {
  font-size: 32px;
  font-weight: 300;
  color: #4c4c4c;
  text-align: center;
  padding-top: 10px;
  margin-bottom: 10px;
}

html{
  background-color: #ffffff;
}

.testbox {
	margin:100px auto;
 

  width: 343px; 
  height: 464px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  background-color: #ebebeb; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}

input[type=radio] {
  visibility: hidden;
}

form{
  margin: 0 30px;
}

label.radio {
	cursor: pointer;
  text-indent: 35px;
  overflow: visible;
  display: inline-block;
  position: relative;
  margin-bottom: 15px;
}

label.radio:before {
  background: #3a57af;
  content:'';
  position: absolute;
  top:2px;
  left: 0;
  width: 20px;
  height: 20px;
  border-radius: 100%;
}

label.radio:after {
	opacity: 0;
	content: '';
	position: absolute;
	width: 0.5em;
	height: 0.25em;
	background: transparent;
	top: 7.5px;
	left: 4.5px;
	border: 3px solid #ffffff;
	border-top: none;
	border-right: none;

	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

input[type=radio]:checked + label:after {
	opacity: 1;
}
hr{
  color: #a9a9a9;
  opacity: 0.3;
}

input[type=text],input[type=email],input[type=password]{
  width: 200px; 
  height: 39px; 
  -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
  border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  background-color: #fff; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 1px #cbc9c9;
  margin-left: -5px;
  margin-top: 13px; 
  padding-left: 10px;
}

input[type=password]{
  margin-bottom: 25px;
}

#icon {
  display: inline-block;
  width: 30px;
  background-color: #3a57af;
  padding: 8px 0px 8px 15px;
  margin-left: 15px;
  -webkit-border-radius: 4px 0px 0px 4px; 
  -moz-border-radius: 4px 0px 0px 4px; 
  border-radius: 4px 0px 0px 4px;
  color: white;
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 0px #cbc9c9;
}

.gender {
  margin-left: 30px;
  margin-bottom: 30px;
}

.accounttype{
  margin-left: 8px;
  margin-top: 20px;
}

a.button,.button {
    cursor: pointer;

    border: unset;
    font-size: 14px;
    font-weight: 600;
    color: white;
    padding: 6px 25px 8px 20px;
    margin: 10px 8px 20px 0px;
    display: inline-block;
    float: right;
    text-decoration: none;
    width: 82px;
    height: 33px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #3a57af;
    -webkit-box-shadow: 0 3px rgba(58,87,175,.75);
    -moz-box-shadow: 0 3px rgba(58,87,175,.75);
    box-shadow: 0 3px rgba(58,87,175,.75);
    transition: all 0.1s linear 0s;
    top: 0px;
    position: relative;
}

a.button:hover,.button:hover {
  top: 3px;
  background-color:#2e458b;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  
</style>
</head>
<body>


<div class="testbox">
  <h1>Registration</h1>
    <?php
        if(isset($_GET['msg'])){
    ?>
        <script type="text/javascript">
            alert(<?php echo $_GET["msg"];?>);
            window.location = "reg.php";
        </script>
    <?php
        }
        if(isset($_GET['error'])){
    ?>
        <script type="text/javascript">
            alert(<?php echo $_GET["error"];?>);
        </script>
    <?php
        }
    ?>
  <form action="reg.php" method="post">
    <hr>
      <div class="accounttype">
        <input type="radio" value="student" id="student" name="account" checked/>
        <label for="student" class="radio" name="student" chec>Student</label>

        <input type="radio" value="faculty" id="faculty" name="account" />
        <label for="faculty" class="radio" name="faculty">Teacher</label>
      </div>
    <hr>
    <label id="icon" for="email"><i class="far fa-envelope"></i></label>
    <input type="email" name="email" id="email" placeholder="Email" required/>

    <label id="icon" for="name"><i class="far fa-user"></i></label>
    <input type="text" name="name" id="name" placeholder="Name" required/>

    <!-- <label id="icon" class="stdId" for="stdId"><i class="far fa-id-badge"></i></label>
    <input type="text" name="stdId" id="stdId" placeholder="Student Id" required/> -->

    <label id="icon" for="password"><i class="fas fa-key"></i></label>
    <input type="password" name="password" id="password" placeholder="Password" required/>
     <!-- <a href="insert.php" class="button">Register</a> -->
     <input type="submit" name="regSubmit" class="button">
  </form>
  <p>If you have already registered <a href="Home.php">Log in</a></p>
</div>
<script type="text/javascript">
    // var stdCh = document.getElementById("student");
    // var stdId = document.getElementById("stdId");
    // var stdIdLb = document.getElementsByClassName("stdId");
</script>
</body>
</html>