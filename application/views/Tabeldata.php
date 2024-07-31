<script language="javascript">

  function hapusdata(KodeData)
  {
    if(confirm("Apakah anda yakin menghapus data ini?")){
        window.open("<?php echo base_url() ?>Cbelajarcrud/hapusdata/"+KodeData, "_self");
    }
  }
  function editdata(KodeData)
	{
		//alert(KodeDaftar);
		load("Cbelajarcrud/editdata/"+KodeData,"#script");	
	}
	
</script>
<div class="container mt-3">
  <h2>Daftar Data</h2>       
  <table class="table table-dark">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      
<?php
    if(empty($hasil))
    {
        echo "Data Kosong";
    }
    else
    {
        $no=1;
        foreach ($hasil as $data):
    
?>
      <tr>
            <td><?= $no; ?></td>
            <td><?= $data->NamaLengkap  ?></td>
            <td><?= $data->Alamat  ?></td>
            <td><?= $data->Telp ?></td>
            <td><?= $data->Email ?></td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="editdata(<?php echo $data->KodeData; ?>)">Edit</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata(<?php echo $data->KodeData; ?>);">Hapus</button>
            </td>
        </tr>
    <?php
    $no++;
    endforeach;
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
