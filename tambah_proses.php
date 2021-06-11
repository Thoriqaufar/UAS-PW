<?php

    if(isset($_POST['Add']))
    {
        include_once 'koneksi.php';
        $destinasi  = $_POST['destinasi'];
        $harga      = $_POST['harga'];

        $input = mysqli_query($koneksi, "insert into pricelist values ('$destinasi', '$harga')");

        if ($input)
        {
            echo "<h3>Data berhasil ditambahkan</h3>";
            echo "<Script>window.location='pricelist.php'</script>";
        }

        else
        {
            echo "<h2>Gagal menambahkan data</h2>";
            echo "<a href = 'tambah.php'>Kembali</a>";
        }
    }

    else
    {
        echo "<script>window.history.back()</script>";
    }

?>