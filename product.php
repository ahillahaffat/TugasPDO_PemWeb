<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Databases Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <h2>Classic Model Product</h2>
        <ul>
            <li><a href="#">Product</a></li>
            <li><a href="customer.php">Customer</a></li>
            
            <li><a href="insert_product.php">Insert</a></li>
        </ul>
    </nav>

    <div class="tabel-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Quantity In Stock</th>
                    <th>Buy Price</th>
                    <th>MSRP</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM products";
                $result = $conn->query($query);

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['productCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['productLine']; ?>
                            </td>
                            <td>
                                <?php echo $row['productScale']; ?>
                            </td>
                            <td>
                                <?php echo $row['productVendor']; ?>
                            </td>
                            <td>
                                <?php echo $row['productDescription']; ?>
                            </td>
                            <td>
                                <?php echo $row['quantityInStock']; ?>
                            </td>
                            <td>
                                <?php echo $row['buyPrice']; ?>
                            </td>
                            <td>
                                <?php echo $row['MSRP']; ?>
                            </td>
                            <td>
                
                        <form method="POST" action="delete_product.php">
                            <input type="hidden" name="productCode" value="<?php echo $row['productCode']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                 
                    </td>
                            <?php
                    }
                   
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>