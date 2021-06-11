<?php
    
    if (isset($_POST['Save']))
    {
        include('koneksi.php');
        $destinasi      = $_POST['destinasi'];
        $harga          = $_POST['harga'];
        $update         = mysqli_query($koneksi, "update pricelist set
        
        harga           = '$harga'
        
        where destinasi = '$destinasi'")

        or die(mysqli_error());

        if ($update)
        {
            echo "<h2> data berhasil diupdate</h2>";
            echo "<script>window.location = 'pricelist.php'</script>";
        }

        else
        {
            echo "<h2>gagal menyimpan data</h2>";
            echo "<a href ='edit.php ?destinasi".$destinasi."'>kembali</a>";
        }
    }

    else
    {
        echo "<script>window.history.back()</script>";
    }

?>