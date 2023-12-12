<?php include "../../config/connection.php";
$sid = $_POST['id'];
$username = $_POST['name'];

$qry = "UPDATE categories SET name='$username'WHERE id = '$sid'";
$query = mysqli_query($con, $qry);
// var_dump($query);
if ($query) {
    header("location: category.php");
} else {
    echo "Update not successfully";
}
