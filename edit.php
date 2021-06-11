<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewsport" content="width-device-width, initial-scale=1.8">
    <title>Thoriq Aufar</title>   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include('koneksi.php');
        $destinasi = $_GET['destinasi'];
        $show = mysqli_query($koneksi, "select *from pricelist where destinasi = '$destinasi'");
        if (mysqli_num_rows($show) == 0)
        {
            echo '<script>window.history.back()</script>';
        }
        else
        {
            $d = mysqli_fetch_assoc($show);
        }
    ?>

    <form action="edit_proses.php" method="post">
        <input type="hidden" name="destinasi" value="<?php echo $destinasi; ?>">
        <table>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td>
                    <input type="text" name="harga" size="12" value="<?php echo $d['harga']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="Save" value="Save"></td>
            </tr>
        </table>
    </form>

</body>
</html>