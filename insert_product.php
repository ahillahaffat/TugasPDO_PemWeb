<?php
require('koneksi.php');

if (isset($_POST["submit"])) {
    if (tambahproduct($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert_product.php';
            </script> 
        ";
    } else {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'insert_product.php';
            </script> 
    ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Tilt+Warp&display=swap" rel="stylesheet">

    <title>Database</title>
</head>

<body>
    <div class="Navbar">
        <div class="kiri">
            <h1>Classic Models</h1>
        </div>
        <div class="kanan">
            <a href="product.php" id="#product">Product</a>
            <a href="customer.php" id="#customer">Customer</a>
        </div>
    </div>

    <form action="" method="post">
            <ul>
                <li>
                <label for="productCode">Product Code : </label>
                <input type="text" name="productCode" id="productCode">
                </li>
            
            
                <li>
                <label for="productName">Product Name : </label>
                <input type="text" name="productName" id="productName">
                </li>
            
            
                <li>
                    <label for="productLine">Product Line : </label>
                    <select class="formsize" id="productLine" name="productLine">
                        <option value="Classic Cars">Classic Cars</option>
                        <option value="Motorcycles">Motorcycles</option>
                        <option value="Planes">Planes</option>
                        <option value="Ships">Ships</option>
                        <option value="ulains">ulains</option>
                        <option value="ulucks and Buses">ulucks and Buses</option>
                        <option value="Vintage Cars">Vintage Cars</option>
                    </select>
                </li>
            
            
                <li>
                    <label for="productScale">Product Scale : </label>
                    <input type="text" name="productScale" id="productScale">
                </li>
            
            
                <li>
                    <label for="productVendor">Product Vendor : </label>
                    <input type="text" name="productVendor" id="productVendor">
                </li>
            
            
                <li>
                    <label for="productDescription">Product Description : </label>
                <li><input type="text" name="productDescription" id="productDescription"></li>
            
            
                <li>
                    <label for="quantityInStock">Quantity in Stock </label>
                    <input type="text" name="quantityInStock" id="quantityInStock">
                </li>
            
            
                <li>
                    <label for="buyPrice">Buy Price </label>
                    <input type="text" name="buyPrice" id="buyPrice">
                </li>
                <li>
                    <label for="MRSP">MRSP </label>
                    <input type="text" name="MRSP" id="MRSP">
                </li>
            <li>
               <button type="submit" name="submit">Submit</button>
            </li>
        </ul>   
    </form>
</body>
</html>