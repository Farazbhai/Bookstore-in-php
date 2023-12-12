<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark text-light">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">User </li>
                <li class="breadcrumb-item active text-light" aria-current="page">created </li>
            </ol>
        </nav>
        <?php include "../../config/connection.php";
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $emailquery = "select * from users where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "email already exists";
    } else {
        $insertquery = "insert into users(name,email,user_pass)values('$username','$email','$pass')";
        $query = mysqli_query($con, $insertquery);
        if ($query) {
            echo "<script>alert('insert succesfully')</script>";
        } else {
            echo "<script>alert('not insert succesfully')</script>";
        }       
    }
    
}
?>
        <form acction="" method="POST" class="custom-form bg-light">
            <div class="row text-light bg-dark border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="user.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Created</h2>
                </div>
            </div>
            <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="author">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="author">Password:</label>
                    <input type="number" class="form-control" id="password" name="password">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>
</body>

</html>