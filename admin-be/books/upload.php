<?php
include "../../config/connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $descript = $_POST['description'];
    $image = $_FILES['image'];
    if ($_FILES['image']['name'] !== "") {
        $current_image_path = 'upload/' . $image;
        if (file_exists($current_image_path)) {
            unlink($current_image_path);
        }
        $file = $_FILES['image'];
        $image = date('YmdHis') . $file['name'];
        $filePath = $file['tmp_name'];
        $fileError = $file['error'];
        // Check if the file type is an image
        $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
        $fileExtension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>alert('Error: Invalid file type. Please upload a valid image file.')
            window.location.href = 'create.php'        
            </script>";
            exit();
        }
        if ($fileError == 0) {
            $destfile = 'upload/' . $image;
            move_uploaded_file($filePath, $destfile);
        }
    }
    $insertQuery = "INSERT INTO books(name, description, image, author_id, category_id, price)
        VALUES ('$name', '$descript', '$image', '$author', '$category', '$price')";
    if (mysqli_query($con, $insertQuery)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
