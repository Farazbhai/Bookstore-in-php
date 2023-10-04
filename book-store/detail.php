<!DOCTYPE html>
<html lang="en">
<?php include "layouts/header.php" ?>
<body>
<?php include "layouts/navbar.php" ?>
<div class="container mt-5">
        <div class="row">
            <div class="col-sm col-lg-6">
                <img src="assets/images/9.jpg" alt="Image not found" width="350px">
            </div>
            <div class="col-sm col-lg-6">
                <p><del> $24.00</del> $22.00</p>
                <h2 class="mt-5">Peter and the Wolf</h2>
                <p class="mt-3">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur erit qui in ea
                    voluptate
                </p>
                QUANTITY: <input class="mt-2" type="number"><br>
                <button class="w-25 mt-5 bg-danger text-light border-0 p-2 border rounded"><a
                        class="text-decoration-none text-light" href="index.html"> Add to card</a></button>
                <hr>
                <div class="d-flex">
                    <p class="text-danger">Author:</p>
                    <p class="ms-2">Jhon Walker</p>
                </div>
                <div class="d-flex">
                    <p class="text-danger">Category:</p>
                    <p class="ms-2">Biogrhapy</p>
                </div>
            </div>
        </div>
    </div>
<?php include "layouts/footer.php" ?>
    
</body>
</html>