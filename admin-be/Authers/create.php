<?php include "../../config/connection.php";
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $select = "SELECT*FROM authors WHERE name='$username'";
    $sql = mysqli_query($con, $select);
    $emailcount = mysqli_num_rows($sql);
    if ($emailcount > 0) {
        echo "<script>alert('Email is already exists')</script>";
    } else {
        $qry = "insert into authors(name)values('$username')";
        $query = mysqli_query($con, $qry);
        if ($query) {
            echo "<script>alert('Data insert')</script>";
        } else {
            "<script>alert('Data not been insert')</script>";
        }
    }
}
?>
<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark text-light">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Authers </li>
                <li class="breadcrumb-item active text-light" aria-current="page">created </li>
            </ol>
        </nav>
        <form action="" method="POST" class="custom-form bg-light">
            <div class="row text-light bg-dark border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="Authers.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Created</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>
</body>

</html>