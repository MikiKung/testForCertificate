<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>New Product</h2>
    <form action="frminsert.php" method="POST">
        <label>ProductName*</label><br>
        <input name="pname" type="text" id="pname" size="40" required><br>

        <label>Picture*</label><br>
        <input name="pic" type="text" id="pic" size="40" required><br>

        <label>Category*</label><br>
        <input name="category" type="text" id="category" size="40" required><br>

        <label>ProductDescription*</label><br>
        <input name="pdest" type="text" id="pdest" size="40" required><br>

        <label>Price*</label><br>
        <input name="price" type="text" id="price" min="0" max="9999" required><br>

        <label>QuantityStock*</label><br>
        <input name="qstock" type="text" id="qstock" min="0" max="999" required><br>

        <br>

        <input type="button" value="Delete">
        <input type="submit" value="save">
        <input type="reset" value="cancel">
    </form>
</body>

</html>