<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewsport" content="width-device-width, initial-scale=1.8">
    <title>Document</title>   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>
        <a href = "pricelist.php">Back</a><br>
        <p>Add Destination Data</p>
    </h3>
    <form action="tambah_proses.php" method="post">
        <table>
            <tr>
                <td>Destination</td>
                <td> : </td>
                <td><input type="text" name="destinasi" required></td>
            </tr>
            <tr>
                <td>Price</td>
                <td> : </td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr >
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="Add" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>