<?php include "../leyout/header.php" ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark text-light">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active text-light" aria-current="page">category</li>
                </ol>
            </nav>
            <div class="table-wrapper">
                <div class="table-title bg-dark">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Category</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="create.php" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span>Add New </span></a>
                        </div>
                    </div>
                </div>
                <?php include "../../config/connection.php";
                $limit = 3;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }else{
                    $page=1;
                }
                $offset = ($page - 1) * $limit;
                $qry = "SELECT * FROM categories LIMIT {$offset},{$limit}";
                $res = mysqli_query($con, $qry);
                ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td class="col-md-2">
                                    <a href="edit.php?id=<?= $row['id']; ?>" class="edit"><i class="fa fa-pencil" aria-hidden="true" title="Edit"></i></a>
                                    <a href="delete.php?id=<?= $row['id']; ?>" class="delete"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                    <a href="view.php?id=<?= $row['id']; ?>" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <?php

                $sql1 = "SELECT * FROM categories";
                $result1 = mysqli_query($con, $sql1) or die("Query failed");

                if (mysqli_num_rows($result1) > 0) {
                    $total_records = mysqli_num_rows($result1);

                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination admin-pagination">';

                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i==$page) {
                            $active="active";
                        }else{
                            $active="";

                        }
                        echo '<li class='.$active.'><a btn btn-primay href="category.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Model</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Models</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Schedule</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Models</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Schedule</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Model</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>