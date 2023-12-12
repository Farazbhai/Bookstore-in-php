<?php include "../../config/connection.php";
if (isset($_REQUEST['id'])) {
    $b_id = $_REQUEST['id'];
    $qry = "SELECT books.*,authors.name AS a_name,categories.name AS c_name FROM books
     JOIN authors ON books.author_id = authors.id
     JOIN categories ON books.category_id = categories.id WHERE books.id=$b_id";
    $query = mysqli_query($con, $qry);
    if (mysqli_num_rows($query) > 0) {
        $fatch = mysqli_fetch_assoc($query);
        $user_name = $fatch['name'];
        $user_image = $fatch['image'];
        $user_description = $fatch['description'];
        $user_price = $fatch['price'];
        $user_c_name = $fatch['c_name'];
        $user_a_name = $fatch['a_name'];
    }
}
else{
    echo '<br><br><br><br><br><br><br><br><br><br><br><br><center><h1> 404 Not Found </h1></center>';
    exit;
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
                <li class="breadcrumb-item active text-light" aria-current="page">book </li>
                <li class="breadcrumb-item active text-light" aria-current="page">View </li>
            </ol>
        </nav>
        <div class="container head">
            <div class="row text-light bg-info border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="index.php">
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
                            <h6>Name</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_name ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Image</h6>
                        </div>
                        <div class="col-10">
                            <img src="../books//upload/<?=$user_image ?>" width="50px" alt="">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Description</h6>
                        </div>
                        <div class="col-10">
                            <h6 class="w-75"><?php echo $user_description ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>price</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_price ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Category</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_c_name ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Authors</h6>
                        </div>
                        <div class="col-10">
                            <h6><?php echo $user_a_name ?></h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Created_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-2">
                            <h6>Updated_at</h6>
                        </div>
                        <div class="col-10">
                            <h6>1</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <?php include "../leyout/footer.php" ?>

    </div>
</div>