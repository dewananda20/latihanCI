
<html>
    <head>
        <title>Tampilan Sistem Penerimaan Mahasiswa baru</title>
    </head>
    <body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sipenmaru</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url()?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Proses Daftar</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Cdaftar/formdaftar') ?>">Daftar</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Clogin/formlogin') ?>">Login</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Ckasir/tampilankasir') ?>">Program Kasir</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Cbelajarcrud/formdata') ?>">Form Data</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
if (empty($konten)) {
  echo "";
} else {
  echo $konten;
}
?>

<?php

 if(empty($tabel))
    {
        echo "";
    }
    else
    {
        echo $tabel;
  }

?>


</body>

<!-- AJAX -->
<div id="script"></div>
<script src="<?php echo base_url(); ?>/jquery/app.js"></script>
<script language="javascript">
	var site = "<?php echo base_url()?>index.php/";
	var loading_image_large = "<?php echo base_url()?>gambar/loading_large.gif";
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</html>