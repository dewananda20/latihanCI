<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Bayar</title>
</head>
<body>
    <?php 
        $TotalHarga = $jumlah * $Harga;
        if($TotalHarga>=10000){
            $Potongan = 3000;
        }
        else 
        {
            $Potongan = 1000;
        }
        $TotalBayar = $TotalHarga - $Potongan;
    ?>
    Program Kasir Sederhana
    <hr/>
    Nama Barang : <?php echo $NamaBarang ?>
    <br>
    Harga Barang : <?php echo $Harga ?>
    <br>
    Total Harga : <?php echo $TotalHarga ?>
    <br>
    Total Bayar : <?php echo $TotalBayar ?>
    <br>
    Potongan : <?php echo $Potongan; ?>
</body>
</html>