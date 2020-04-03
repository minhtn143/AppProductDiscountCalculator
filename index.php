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
                    <input type="text" name="description" value="" placeholder="Describe product">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="price"> List Price: </label>
                </td>
                <td>
                    <input type="text" name="price" value="" placeholder="Enter list price">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="discountPercent">Discount Percent:</label>
                </td>
                <td>
                    <input type="text" name="discountPercent" value="" placeholder="Discount Percent (%)">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Calculate</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>

</body>
</html>


