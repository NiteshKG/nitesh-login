<?php
// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location:login.php");
//     exit;
// }
?>
<?php echo  "welcome -"?>
<?php

if(isset($_POST['logout'])){
    setcookie("submit","",time()-1);
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Here is your details of bank</h1>
    <h3>Full Name : </h3>
    <h3>Branch Name : </h3>
    <h3>Customer Id : </h3>
    <h3>Account type : </h3>
    <h3>Account number : </h3>
    <form action="" method="POST">
    <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
