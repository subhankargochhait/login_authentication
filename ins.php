<?php

$con=mysqli_connect("localhost","root","","10april");

$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['pass'];

$ins="INSERT INTO login SET name='$n',email='$e',password='$p'";
if($con->query($ins)){
    header("location:index.php");
}
?>