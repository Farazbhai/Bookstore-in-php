<?php include "../../config/connection.php";
$sid = $_REQUEST['id'];
$selectqry = "DELETE FROM books WHERE id='$sid'";
$query = mysqli_query($con, $selectqry);
if ($query) {
    header("location: index.php");
}else{
    echo "Data is not insert";
}
