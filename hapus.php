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

    <?php
        
        if (isset($_GET['destinasi']))
        {
            include('koneksi.php');
            $destinasi      = $_GET['destinasi'];
            $cek            = mysqli_query($koneksi, "select destinasi from pricelist where 
            destinasi = '$destinasi'") or die(mysqli_error());

            if (mysqli_num_rows($cek) == 0)
            {
                echo "<scrip>window.history.back()</script>";
            }

            else
            {
                $del = mysqli_query($koneksi, "delete from pricelist where destinasi = '$destinasi'");
                if ($del)
                {
                    echo "<h3>Data pricelist berhasil dihapus</h3>";
                    echo "<script>window.location = 'pricelist.php';</script>";
                }

                else
                {
                    echo "<h2>Gagal menghapus data</h2>";
                    echo "<a href = 'pricelist.php'>Kembali </a>";
                }
            }
        }

        else
        {
            echo "<script>window.history.back()</script>";
        }

    ?>

<body>

</body>
</html>