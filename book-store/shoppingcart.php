<!DOCTYPE html>
<html lang="en">
<?php include "layouts/header.php";
session_start();
$cartItems = [];
if (isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
}

?>

<body>
    <?php include "layouts/navbar.php" ?>
    <div class="container mt-5 pb-5 overflow-hidden">
        <h1 class="text-center bg-warning text-light py-4">Shopping Cart</h1>
        <table class="table table-striped table-bordered border-white text-center">
            <thead class="py-2">
                <tr>
                    <th scope="col">Id</th>
                    <th>Book</th>
                    <th>Item</th>
                    <!-- <th scope="col">Category</th> -->
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody id="CartTable">
                <?php

                $totalqty = 0;
                $granttotal = 0;

                foreach ($cartItems as $index => $item) {
                    $total = $item['price'] * $item['quantity'];
                    $totalqty += $item['quantity'];
                    $granttotal += $total;
                ?>
                    <tr>
                        <td class="border text-center p-2"><?= $index + 1 ?></td>
                        <td> <img src="../admin-be/books/upload/<?= $item['image'] ?>" width="70px" alt=""> </td>
                        <td class=" border text-center"><?= $item['name'] ?> </td>
                        <!-- <td class="border text-center">fiction</td> -->
                        <td class="border text-center"><?= $item['quantity'] ?></td>
                        <td class="border text-center"><?= $item['price'] ?></td>
                        <td class="border text-center"><?= $total ?></td>
                        <!-- <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td> -->
                        <form action="add_to_card.php" method="POST">
                            <td class="border text-center"><button name="remove" class=" bg-warning border-0 text-light rounded-3 ">Remove</button></td>
                            <td><input name="index" value="<?= $index ?>" type="hidden"></td>
                        </form>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <div class="d-flex justify-content-around">
                <p>Total Quantity</p>
                <p id="totalQty"><?= $totalqty ?></p>
                <p>Total Price</p>
                <p id="totalPrice"><?= $granttotal ?></p>
                <form action="order.php" method="POST">
                    <input type="hidden" name="total" value="<?=$granttotal?>">
                    <button type="submit" class="btn btn-outline-secondary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "layouts/footer.php" ?>

</body>

</html>