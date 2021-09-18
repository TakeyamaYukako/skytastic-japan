<?php
include "../classes/user.php";

$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$address =$_POST['address'];
$contact_number =$_POST['contact_number'];
$username =$_POST['username'];
$password =$_POST['password'];

$user = new User;

$user->createUser($first_name, $last_name,$contact_number, $email,$username, $password);

?>