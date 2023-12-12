<?php
include('../../config/connection.php');
$sid = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$qry = "UPDATE users SET name='$name',Email='$email' WHERE id = '$sid'";
// echo $qry;exit;
$res = mysqli_query($con, $qry);

if ($res === true) {
    echo "<script>window.location.href='user.php'</script>";
} else {
    echo "<script>alert('Your Data Has Not Been  Updated')</script>";
}
