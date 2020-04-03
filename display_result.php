<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_REQUEST);
    $description = $_REQUEST["description"];
    $price = (float)$_REQUEST["price"];
    $discountPercent = (float)$_REQUEST["discountPercent"];

    $discountAmount = $price * $discountPercent / 100 * 0.1;
    $discountPrice = $price - $discountAmount;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
</head>
<body>
<h2>Product Discount Calculator</h2>
<form method="post" id="formGet" action="display_result.php">
    <fieldset>
        <legend>Enter information</legend>
        <table>
            <tr>
                <td>
                    <label for="description">Product Description:</label>
                </td>
                <td>
                    <?php
                    echo $description
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="price"> List Price: </label>
                </td>
                <td>
                    <?php
                    echo "$" . $price
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="discountPercent">Discount Percent:</label>
                </td>
                <td>
                    <?php
                    echo $description
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="discountAmount">Discount Amount:</label>
                </td>
                <td>
                    <?php
                    echo $discountPercent . "%"
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="discountPrice">Discount Price:</label>
                </td>
                <td>
                    <?php
                    echo "$" . $discountPrice
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>


