<?php include "../leyout/header.php"; ?>
<div class="wrapper">
    <?php include "../leyout/sidebar.php" ?>
    <div id="content">
        <?php include "../leyout/navbar.php" ?>
        <?php include "../../config/connection.php";
        $sid = $_REQUEST['id'];
        $selectqry = "SELECT*FROM books WHERE id='$sid'";
        $query = mysqli_query($con, $selectqry);
        $row = mysqli_fetch_array($query);
        ?>
        <form action="update.php" method="POST" class="custom-form" enctype="multipart/form-data">
            <div class="row text-light bg-dark border  rounded mb-2 p-2">
                <div class="col-sm-5">
                    <a href="index.php">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-sm-7">
                    <h2>Create</h2>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Name:</label>
                    <input type="hidden" class="form-control" id="name" name="book_id" value="<?php echo $row['id'] ?>">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Author:</label>
                    <select name="author" class="form-control">
                        <?php
                        include "../../config/connection.php";
                        $autqry = "SELECT*FROM authors";
                        $query = mysqli_query($con, $autqry);
                        while ($autRow = mysqli_fetch_assoc($query)) {
                            $selected = ($autRow['id'] == $row['author_id']) ? "selected" : "";
                        ?>
                            <option value="<?php echo $autRow['id'] ?>" <?php echo $selected ?>><?php echo $autRow['name'] ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="category">Category:</label>
                    <select name="category" class="form-control">
                        <?php
                        $category = "SELECT*FROM categories";
                        $catoqry = mysqli_query($con, $category);
                        while ($catoRow = mysqli_fetch_assoc($catoqry)) {
                            $selected = ($catoRow['id'] == $row['category_id']) ? "selected" : "";
                        ?>
                             <option value="<?php echo $catoRow['id'] ?>" <?php echo $selected ?>><?php echo $catoRow['name'] ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group" enctype="multipart/form-data">
                <label for="image">Image:</label>
                <div class="custom-file">
                    <input type="hidden" class="custom-file-input" id="image" name="current_image" value="<?php echo $row['image'] ?>">
                    <input type="file" class="custom-file-input" id="image" name="image" value="<?php echo $row['image'] ?>">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-12">
                        <label for="name">price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="4"><?php echo $row['description'] ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
        <?php include "../leyout/footer.php" ?>
    </div>
</div>