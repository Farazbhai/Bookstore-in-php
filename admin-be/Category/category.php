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
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Umair bhai</td>
                            <td class="col-md-2">
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-pencil" aria-hidden="true" data-toggle="tooltip" title="Edit"></i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                <a href="view.php" class=""><i class="fa fa-eye" aria-hidden="true" data-toggle="tooltip" title="view"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
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