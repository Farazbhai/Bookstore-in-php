<!DOCTYPE html>
<html lang="en">
<?php include "layouts/header.php" ?>

<body>
  <?php include "layouts/navbar.php" ?>
  <?php include "../config/connection.php" ?>
  <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/slide1.png" class="d-block w-100" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider-02-2 (1).png" class="d-block w-100" alt="image not found">
      </div>
      <div class="carousel-item">
        <img src="assets/images/slider-02-2.png" class="d-block w-100" alt="image not found">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-5">
    <div class="row w-100 text-center">

      <?php
      $select = "SELECT*FROM books";
      $bookitems = mysqli_query($con, $select);
      if (mysqli_num_rows($bookitems) > 0) {
        foreach ($bookitems as $bookitem) {
      ?>
          <div class="col-sm col-md-3">
            <a href="detail.php"><img class="w-100" src="../admin-be/books/upload/<?= $bookitem['image'] ?>" alt="#"></a>
            <p class="text-center mt-3"><?= $bookitem['price'] ?></p>
            <span class="spn fw-bold"><?= $bookitem['name'] ?></span>
            <p class="pera mt-3"><?= $bookitem['description'] ?></p>

            <form action="add_to_card.php" method="POST">
              <input type="hidden" name="id" value="<?= $bookitem['id'] ?>">
              <input type="hidden" name="name" value="<?= $bookitem['name'] ?>">
              <input type="hidden" name="image" value="<?= $bookitem['image'] ?>">
              <input type="hidden" name="price" value="<?= $bookitem['price'] ?>">
              QTY:<input type="number" name="qty" min="1" value="1" class="w-25 rounded border-1 " type="number"><br>
              <button name="submit" class="mt-2 rounded border-1 border-black bg-black text-light p-2">Add to
                card</button><br>
          </div>
          </form>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <?php include "layouts/footer.php" ?>
</body>

</html>