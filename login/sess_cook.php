<?php


$otp = rand(000000,999999);
echo $otp;
setcookie('otp',$otp);


// session_start();
// $_SESSION['test'] = 'default';

?>