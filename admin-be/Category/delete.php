<?php include "../../config/connection.php";

$res=$_REQUEST['id'];
 $qry="DELETE FROM categories WHERE id='$res'";
$query=mysqli_query($con,$qry);
if ($query) {
    echo header("location: category.php");
}else{
    echo "Not delete";
}
?>