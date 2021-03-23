<?php 
    include 'db/session.php';
    Session::init();
    include "db/conf.php";
    include "db/db.php";
    $db = new Database();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["fcEmail"];
        $fcPass = md5($_POST["fcPass"]);
        $query = "SELECT * FROM facult_account WHERE `fc_email`='$email' and `fc_password`='$fcPass'";
        $result = $db->select($query);
        if ($result != false) {
            $value = $result->fetch_assoc(); 
            Session::set("login", true);
            header("Location: Faculty_module.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tution fee Payment</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="payment.css">

        <div class="container" id="login">
            <div class="top-bar"> </div>
            <div class="middle-section">
                <h1>Login Now</h1>
                <p></p>
                <form action="fc_login.php" method="POST">
                    <div class="input-box">
                       <label for="name"> User   </label>
                        <input type="email" name="fcEmail" placeholder="Enter your email address" id="name">
                    </div>
                    <div class="input-box">
                       <label for="password" >Password</label>
                        <input type="password" name="fcPass" placeholder="Enter your password" id="password">
                    </div>
                    <div class="flex-container">
                        <button type="submit" name="fcLogin">Submit</button>
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
