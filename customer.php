<?php
include('koneksi.php');
include ('array.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $judul [2] ?></title>
</head>
<body>
<nav>
<h2><?php echo $judul[0]," ", $judul[1] ?></h2>        
        <ul>
            <li><a href="#">Customer</a></li>
            <li><a href="product.php">Product</a></li>
            
            <li><a href="insert_customer.php">Insert</a></li>
        </ul>
    </nav>
<div class="tabel-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Customer Number</th>
                    <th>Credit Limit</th>
                    <th>Option</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = $conn->query($query);

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['customerNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['postalCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>
                            <td>
                                <?php echo $row['salesRepCustomerNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['creditLimit']; ?>
                            </td>
                            <td>
                                <form method="POST" action="delete_customer.php">
                                <input type="hidden" name="customerNumber" value="<?php echo $row['customerNumber']; ?>">
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