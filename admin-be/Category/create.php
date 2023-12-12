<?php include "../../config/connection.php";
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $qry = "insert into categories values('null','$username')";
    $query=mysqli_query($con,$qry);

if ($query) {
    echo "<script>alert('Your data is insert')</script>";
}else{
    echo "<script>alert('Your data is not insert')</script>";
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
                <li class="breadcrumb-item active text-light" aria-current="page">Category </li>
                <li class="breadcrumb-item active text-light" aria-current="page">Create</li>
            </ol>
        </nav>
        <form action="" method="POST" class="custom-form bg-light">
            <div class="row text-light bg-dark border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="category.php">
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
        <?php include "../leyout/footer.php" ?>
    </div>
</div>
</body>

</html>