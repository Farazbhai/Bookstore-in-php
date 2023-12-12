<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <?php include "../../config/connection.php";
        $sid = $_REQUEST['id'];
        $query = "SELECT*FROM authors WHERE id='$sid'";
        $res = mysqli_query($con, $query);
        $row = mysqli_fetch_array($res);
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
                <button name="submit" type="submit" class="btn btn-primary">Update Record</button>
            </form>
        </div>