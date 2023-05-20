<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DBNAME="usersaccount";

$conn= mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);

if($conn->connect_error){
    die ("Connection failed".$conn->connect_error);
    exit();
}
?>