<?php

include 'db_connect.php';
$username = $_GET['username'];
$password = $_GET['pass'];

$query=$db->query("SELECT COUNT(*) as count FROM `admins` WHERE `username`='$username' AND `pass`='$password'");
$row=$query->fetchArray();
$count=$row['count'];

if ($count>0)
{
     header("Location: ../application/dashboard.html");  
}
else
{
    header("Location: sign-in.html");
}
$db->close();

?>