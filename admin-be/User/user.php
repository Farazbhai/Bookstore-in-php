<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark text-light">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active text-light" aria-current="page">user </li>
                </ol>
            </nav>
            <div class="table-wrapper">
                <div class="table-title bg-dark">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Users</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="created.php" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add New </span></a>
                        </div>
                    </div>
                </div>
                <?php include "../../config/connection.php";
                $limit = 3;

                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                };
                $offset = ($page - 1) * $limit;
                $qry = "SELECT * FROM users LIMIT {$offset},{$limit}";
                $res = mysqli_query($con, $qry);
                ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td class="col-md-2">
                                    <a href="edit.php?id=<?= $row['id'] ?>" class="edit"><i class="fa fa-pencil" aria-hidden="true" data-toggle="tooltip" title="Edit"></i></a>
                                    <a href="delete.php?id= <?= $row['id'] ?>" class="delete"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                    <a href="view.php?id=<?= $row['id'] ?>" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                $sql1 = "SELECT * FROM users";
                $result1 = mysqli_query($con, $sql1) or die("Query failed");

                if (mysqli_num_rows($result1) > 0) {
                    $total_records = mysqli_num_rows($result1);

                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination admin-pagination">';

                    if ($page > 1) {
                        echo '<li><a href="user.php?page=' . ($page - 1) . '">Previes</a></li>';
                    }

                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        echo '<li class="' . $active . '"><a btn btn-primay href="user.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    if ($total_page > $page) {
                        echo '<li><a href="user.php?page=' . ($page + 1) . '">Next</a></li>';
                    }
                    echo '</ul>';
                }

                ?>
            </div>
        </div>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>