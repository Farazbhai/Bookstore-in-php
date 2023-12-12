<?php include "../leyout/header.php" ?>

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
            header('location: login.php');
        } else {
            echo "<script>alert('not insert succesfully')</script>";
        }
    }
}
?>
<div style="width: 24rem;" class="container bg-light border border rounded mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="" method="POST">
                <h2 class="text-center text-primary">Registration Form</h2>
                <div class="form-group">
                    <label class="text-dark mt-4" for="username">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label class="text-dark mt-4" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label class="text-dark mt-4" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="text-center mt-3">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    <p class="mt-5 text-light">Have an acount <a class="text-light" style="color: blue; margin-left: px;" href="Login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>