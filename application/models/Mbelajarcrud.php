<?php
    class Mbelajarcrud extends CI_Model
    {
        function simpandata()
        {
            $data=$_POST;
            $KodeData=$data['KodeData'];
            if ($KodeData=="")
            {
                //simpan
                $this->db->insert('tbdata',$data);
                $this->session->set_flashdata('pesan','Data sudah disimpan');
            }
            else
            {
                //edit
                $Kode=array(
                    'KodeData'=>$KodeData
                );
                $this->db->where($Kode);
                $this->db->update('tbdata',$data);
                $this->session->set_flashdata('pesan','Data sudah diedit');
            }
        }
        function tampildata()
        {
            $sql="select * from tbdata order by KodeData";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
                foreach ($query->result()as $data)
                {
                    $hasil[] = $data;
                }
            }
            else
            {
                $hasil = "";
            }
            return $hasil;
        }

        function hapusdata($KodeData)
        {
            $sql="delete from tbdata where KodeData='".$KodeData."'";
            $this->db->query($sql);
        }
        function editdata($KodeData)
		{
			$sql="select * from tbdata where KodeData='".$KodeData."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeData').val('".$data->KodeData."');</script>";
				echo "<script>$('#NamaLengkap').val('".$data->NamaLengkap."');</script>";	
				echo "<script>$('#Alamat').val('".$data->Alamat."');</script>";
				echo "<script>$('#Telp').val('".$data->Telp."');</script>";
				echo "<script>$('#Email').val('".$data->Email."');</script>";
			}
				
		
		}	
		
		
		
		
		
	}
?>