<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Belajar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<script language="javascript">
    function simpandata()
    {
        var NamaLengkap=$('#NamaLengkap').val();
        if (NamaLengkap=="")
        {
            alert("Nama lengkap masih kosong");
            $('#NamaLengkap').focus();
            return false;
        }

        var Alamat=$('#Alamat').val();
        if (Alamat=="")
        {
            alert("Alamat masih kosong");
            $('#Alamat').focus();
            return false;
        }

        var Telp=$('#Telp').val();
        if (Telp == "")
        {
            alert("Telp masih kosong");
            $('#Telp').focus();
            return false;
        }

        var Email=$('#Email').val();
        if (Email == "")
        {
            alert("Email masih kosong");
            $('#Email').focus();
            return false;
        }
        $('#formdata').submit();

    }
</script>
<div class="container">
<br/>
 <?php
    $pesan=$this->session->flashdata('pesan');
    if ($pesan=="")
    {
        echo "";
    }
    else
    {
?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong><?php echo $pesan; ?></strong>
    </div>

<?php
     }
?>
<div class="container mt-3">
  <h2>Form Belajar Crud</h2>
    <form name="formdata" id="formdata" method="post" action="<?php echo base_url('Cbelajarcrud/simpandata'); ?>">
    <div class="mb-3 mt-3">
    <input type="hidden" name="KodeData" id="KodeData"/>
      <label for="Nama Lengkap">Nama Lengkap:</label>
      <input type="text" class="form-control" id="NamaLengkap" placeholder="Masukan Nama Lengkap" name="NamaLengkap">
    </div>
    <div class="mb-3 mt-3">
      <label for="Alamat">Alamat:</label>
      <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat" name="Alamat">
    </div>
    <div class="mb-3 mt-3">
      <label for="Telp">Telp:</label>
      <input type="text" class="form-control" id="Telp" placeholder="Telp" name="Telp">
    </div>
    <div class="mb-3 mt-3">
      <label for="Email">Email:</label>
      <input type="Email" class="form-control" id="Email" placeholder="Email" name="Email">
    </div>
    <button type="button" class="btn btn-primary" onClick="simpandata();">Daftar</button>
  </form>
</div>

</body>
</html>