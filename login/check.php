<?php
$usr_otp = $_POST['otp'];
if($_COOKIE['otp'] == $usr_otp){
    echo "logged in";
}else{
    echo "invalid otp";
}
?>