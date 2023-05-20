<?php
if(isset($_POST['submit'])){
//if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'conn.php';
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `users` WHERE email='$email'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);

  if($num==1){
    while($row=mysqli_fetch_assoc($result)){
      if(password_verify($password,$row['password']))
      {
    
    
      setcookie("submit","1",time()+60);

    
    header("location:welcome.php");
  }
  echo "invalid";
}
  }

  else{
    echo "invalid";
  }
  
}
 

 



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="login.php" method = "POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" name = "email"  placeholder="email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name = "password" placeholder="Password" autocomplete="new-password">
      </div>
      
    </div>
    <div class="action">
        
      <button>Register</button>

      <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div>
<!-- partial -->
 

</body>
</html>