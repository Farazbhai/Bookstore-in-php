<?php include "../../config/connection.php";
$sid = $_REQUEST['id'];
$qry = "DELETE FROM authors WHERE id='$sid'";
$query = mysqli_query($con, $qry);
if ($query) {
    header("location: Authers.php");
} else {
    echo "Delete not succes";
}
