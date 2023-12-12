<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <?php include "../../config/connection.php";

        $sid = $_REQUEST['id'];
        $qry = "SELECT*FROM categories WHERE id='$sid'";
        $query = mysqli_query($con, $qry);

        $row = mysqli_fetch_array($query);


        ?>
        <div class="container">
            <form action="update.php" method="POST">
                <div class="mb-3 mt-3">
                    <label>ID:</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" placeholder="Enter Student ID" readonly>
                </div>
                <div class="mb-3 mt-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Student Name">
                </div>
                <button type="submit" class="btn btn-primary">Update Record</button>
            </form>
        </div>