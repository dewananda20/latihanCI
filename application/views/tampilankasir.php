<!DOCTYPE html>
<html lang="en">
<head>
  <title>Program Kasir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<div class="container mt-3">
  <h2>Program Kasir Sederhana </h2>
  <form name="formkasir" method="POST" action="<?php echo base_url('Ckasir/hitung') ?>">
    <div class="mb-3 mt-3">
      <label for="text">Nama Barang:</label>
      <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
    </div>
    <div class="mb-3">
      <label for="Harga">Harga:</label>
      <input type="text" class="form-control" id="Harga" name="Harga">
    </div>
    <div class="mb-3">
      <label for="harga">Jumlah:</label>
      <select name="jumlah" id="Jumlah" class="form-control">
        <option value="">PILIH</option>
        <?php 
            for($a=1;$a<=100;$a++)
            {
                echo "<option value='$a'>$a</option>";
            }
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>
</html>