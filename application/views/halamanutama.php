<html lang="en">
<head>
  <title>Halaman Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Master Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Laporan</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Akun</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Ubah Password</a></li>
            <li><a class="dropdown-item" href="javascript:void(0)" onClick="logout();">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<hr/>
Selamat Datang : 
<?php
	echo $this->session->userdata('NamaLengkap');
?>

<script language="javascript">
	function logout()
	{
		if (confirm("Apakah yakin keluar sistem"))
		{
			//jalankan	
			window.open("<?php echo base_url(); ?>clogin/logout","_self");
		}	
	}
</script>




</body>
</html>
