<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where email = '$email' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1) {
    $_SESSION['username'] = $name;
  header('location:home.php');
} else {
header('location:index.php');

}
?>
