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
        <form class="custom-form bg-light">
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
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>
</body>

</html>