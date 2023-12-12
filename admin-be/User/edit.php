<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <?php include "../../config/connection.php";
        $sid = $_REQUEST['id'];
        $qry = "SELECT*FROM users WHERE id='$sid'";
        $res = mysqli_query($con, $qry);
        // echo json_encode($qry);exit;
        $row = mysqli_fetch_array($res);
        ?>
        <div class="container">
            <form action="update.php" method="POST">
                <div class="mb-3 mt-3">
                    <label>Student ID:</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" placeholder="Enter Student ID"  readonly>
                </div>
                <div class="mb-3 mt-3">
                    <label>Student Name:</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Student Name">
                </div>
                <div class="mb-3 mt-3">
                    <label>Student Email:</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter Student Email">
                </div>
                <button type="submit" class="btn btn-primary">Update Record</button>
            </form>
        </div>
        <?php include "../leyout/footer.php" ?>
    </div>