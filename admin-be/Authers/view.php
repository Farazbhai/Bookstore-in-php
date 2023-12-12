<?php include "../../config/connection.php";
$sid=$_REQUEST['id'];
$select="SELECT*FROM authors WHERE id='$sid'";
$query=mysqli_query($con,$select);
if (mysqli_num_rows($query)==1) {
    $num=mysqli_fetch_assoc($query);
    $user_id=$num['id'];
    $user_name=$num['name'];
}else{
    echo "viewer not found";

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
                <li class="breadcrumb-item active text-light" aria-current="page">Authers</li>
                <li class="breadcrumb-item active text-light" aria-current="page">View </li>
            </ol>
        </nav>
        <div class="container head">
            <div class="row text-light bg-info border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="Authers.php">
                        <i style="font-size: 45px;" class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>#</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_id?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_name?></h6>
                        </div>
                    </div>
                </li>
        </div>
    </div>
</div>