<?php include "../../config/connection.php";
$sid = $_POST['id'];
$username = $_POST['name'];
$qry = "UPDATE authors SET name='$username'WHERE id = '$sid'";
var_dump($qry);
$query = mysqli_query($con, $qry);
if ($query) {
    header("location: Authers.php");
} else {
    echo "Update not succesfully";
}
