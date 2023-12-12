<?php include "../../config/connection.php";
$res = $_REQUEST['id'];
$sql = "DELETE FROM users WHERE id='$res'";
$query = mysqli_query($con, $sql);
// echo $query;exit;
if ($query == true) {
    echo header("location: user.php");
} else {
    echo "Not succes";
}
