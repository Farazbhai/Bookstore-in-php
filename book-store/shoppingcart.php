<!DOCTYPE html>
<html lang="en">
<?php include "layouts/header.php" ?>
<body>
<?php include "layouts/navbar.php" ?>
<div class="container mt-5 pb-5 overflow-hidden">
        <h1 class="text-center bg-warning text-light py-4">Shopping Cart</h1>
        <table class="table table-striped table-bordered border-white text-center">
            <thead class="py-2">
                <tr>
                    <th scope="col">Id</th>
                    <th colspan="2">Item</th>
                    <th scope="col">Category</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody id="CartTable">
                <tr>
                    <td class="border text-center p-2">1</td>
                    <td class=" border text-center">Sam & Dave </td>
                    <td class="border text-center">fiction</td>
                    <td class="border text-center">1</td>
                    <td class="border text-center">$14.00</td>
                    <td class="border text-center">$14.00</td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr class=" bg-light">
                    <td class="border text-center p-2">2</td>
                    <td class=" border text-center">The Assault
                    </td>
                    <td class="border text-center">Biogarahfy</td>
                    <td class="border text-center">2</td>
                    <td class="border text-center">$19.00</td>
                    <td class="border text-center">38.00</td>
                    <td class="border  text-center"><button class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr>    
                    <td class="border text-center p-2">3</td>
                    <td class=" border text-center">
                        The Carrot Hunt
                    </td>
                    <td class="border text-center">History</td>
                    <td class="border text-center">3</td>
                    <td class="border text-center">$19.00</td>
                    <td class="border text-center">57.00</td>
                    <td class="border text-center"><button class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr class="bg-light">
                    <td class="border text-center p-2">4</td>
                    <td class=" border text-center">
                        The DARK
                    </td>
                    <td class="border text-center">History</td>
                    <td class="border text-center">4</td>
                    <td class="border text-center">$20.00</td>
                    <td class="border text-center">80.00</td>
                    <td class="border  text-center"><button class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr>
                    <td class="border text-center p-2">5</td>
                    <td class=" border text-center">
                        The Journey 
                    </td>
                    <td class="border text-center">Dream</td>
                    <td class="border text-center">3</td>
                    <td class="border text-center">$12.00</td>
                    <td class="border text-center">36.00</td>
                    <td class="border text-center"><button class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr class="bg-light">
                    <td class="border text-center p-2">6</td>
                    <td class=" border text-center">
                        The Night 
                    </td>
                    <td class="border text-center">Horor</td>
                    <td class="border text-center">2</td>
                    <td class="border text-center">$22.00</td>
                    <td class="border text-center">44.00</td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border  text-center"><button class=" bg-warning border-0 text-light rounded-3">Delete</button></td>
                </tr>
                <tr>
                    <td class="border text-center p-2">7</td>
                    <td class=" border text-center">
                        The Summer of
                    </td>
                    <td class="border text-center">History</td>
                    <td class="border text-center">2</td>
                    <td class="border text-center">$24.00</td>
                    <td class="border text-center">48.00</td>
                    <td class="border  text-center"><button class="bg-warning border-0  text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 text-light rounded-3 ">Delete</button></td>
                </tr>
                <tr class="bg-light">
                    <td class="border text-center p-2">8</td>
                    <td class=" border text-center">
                        TRIO – Sarah
                    </td>
                    <td class="border text-center">History</td>
                    <td class="border text-center">3</td>
                    <td class="border text-center">$25.00</td>
                    <td class="border text-center">75.00</td>
                    <td class="border  text-center"><button class=" bg-warning border-0 text-light rounded-3 w-50">Edit</button></td>
                    <td class="border text-center"><button  class=" bg-warning border-0 rounded-3 text-light ">Delete</button></td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <div class="d-flex justify-content-around">
                <p>Total Quantity</p>
                <p id="totalQty">19</p>
                <p>Total Price</p>
                <p id="totalPrice">15110</p>
                <button type="button" class="btn btn-outline-secondary">Order Now</button>
            </div>
        </div>
    </div>
<?php include "layouts/footer.php" ?>
    
</body>
</html>