<script language="javascript">
	function proseslogin()
	{
		var Username=$('#Username').val();
		if (Username=="")
		{
			alert ("Username masih kosong");
			$('#Username').focus();
			return false;	
		}	
		
		var Password=$('#Password').val();
		if (Password=="")
		{
			alert ("Password masih kosong");
			$('#Password').focus();
			return false;	
		}
		$('#formlogin').submit();	
	}
</script>

 
<div class="container">

<?php
	$pesan=$this->session->flashdata('pesan');
	if ($pesan=="")
	{
		echo "";	
	}
	else
	{	
?>
	<div class="alert alert-danger alert-dismissible">
  	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  	<strong><?php echo $pesan; ?></strong>
	</div>
      
<?php
	 }
?>
 <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url('clogin/proseslogin'); ?>">
  <div class="mb-3 mt-3">
    <label class="form-label">Username:</label>
    <input type="text" class="form-control" id="Username" placeholder="Masukkan Username" name="Username">
  </div>
  <div class="mb-3">
    <label class="form-label">Password:</label>
    <input type="password" class="form-control" id="Password" placeholder="Masukkan Password" name="Password">
  </div>
  
  <button type="button" class="btn btn-primary" onclick="proseslogin();">Login</button>
  <button type="reset" class="btn btn-danger">Batal</button>
</form> 

</div>