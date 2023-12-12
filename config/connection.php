<?php

$server="localhost";
$user="root";
$password="";
$db="bookstore";

$con=mysqli_connect($server,$user,$password,$db);

if (!$con) {
    echo "<script>alert('Your database is not connected')</script>";

}
?>