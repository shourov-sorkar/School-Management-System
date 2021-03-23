<?php 
    include 'db/session.php';
    Session::init();
    include "db/conf.php";
    include "db/db.php";
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["stdEmail"];
        $stdPass = md5($_POST["stdPass"]);
        $query = "SELECT * FROM student_account WHERE `std_email`='$email' and `std_password`='$stdPass'";
        $result = $db->select($query);
        if ($result != false) {
            $value = $result->fetch_assoc(); 
            Session::set("login", true);
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in </title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="payment.css">

        <div class="container" id="login">
            <div class="top-bar"> </div>
            <div class="middle-section">
                <h1>Login Now</h1>
                <p></p>
                <form action="std_login.php" method="POST">
                    <div class="input-box">
                       <label for="name"> User   </label>
                        <input type="email" name="stdEmail" placeholder="Enter your email address" id="name">
                    </div>
                    <div class="input-box">
                       <label for="password" >Password</label>
                        <input type="password" name="stdPass" placeholder="Enter your password" id="password">
                    </div>
                    <div class="flex-container">
                        <button type="submit" name="stdLogin">Submit</button>
                    </div>
                   

                </form>
            </div>
            <div class="bottom-bar">
                Developed by Shourov
            </div>
        </div>

<script type="text/javascript" src="payment.js"></script>
</body>
</html>
