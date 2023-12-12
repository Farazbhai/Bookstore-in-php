<?php include "layouts/header.php" ?>

<?php include "../config/connection.php";
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['femail'];
    $pass = $_POST['fpass'];
    $qry = "SELECT * FROM `users` WHERE email='$email'";
    $res = mysqli_query($con, $qry);
    $emailcount = mysqli_num_rows($res);

    if ($emailcount > 0) {
        $userdata = mysqli_fetch_assoc($res);
        $db_pass = $userdata['user_pass'];
        $verify_pass = password_verify($pass, $db_pass);

        if ($verify_pass) {
            $_SESSION['user'] = $userdata;
            echo "<script>alert('Login succesfully')</script>";
            header('location: home.php');
        } else {
            echo "<script>alert('Incorrect password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Email')</script>";
    }
}


?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" class="form-control" id="femail" name="femail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="fpass" name="fpass" placeholder="Enter your password" required>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>