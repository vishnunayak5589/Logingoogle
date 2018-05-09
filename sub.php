<?php

session_start()

$userData = $_SESSION['userData'];

$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host,$user,$pass);
if(!$conn)
{
die("Connection failed: " .mysqli_connect_error());
}

$db = mysqli_select_db($conn,'logingooglee');

$cty = $_POST['city'];
$stat = $_POST['state'];
$cod = $_POST['code'];
$cnty = $_POST['country'];





mysqli_query($conn,"UPDATE  users set city='{$cty}', state= '{$stat}', code ='{$cod}' , country= '{$cnty}' where oauth_uid = '".$userData['oauth_uid']."'");

header("location: rett.html");
?>