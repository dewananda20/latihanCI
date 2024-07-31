<?php
    class Cbelajarcrud extends CI_Controller
    {
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('Mbelajarcrud');
        }
        function formdata()
        {
            // menyimpan view form Daftar array data -->konten
            $data['konten'] = $this->load->view('formdata', '', TRUE);
            $datalist['hasil']=$this->Mbelajarcrud->tampildata();
            $data['tabel']= $this->load->view('tabeldata',$datalist,TRUE);
            // kirim konten ke halaman utama --> tampilan awal
            $this->load->view('tampilanawal', $data);
        }
        function simpandata()
        {
           $this->load->model('Mbelajarcrud'); //panggilmodel
           $this->Mbelajarcrud->simpandata(); //panggil fungsi
           $this->formdata(); //tampilkan kembali view
        }
        function hapusdata($KodeData)
        {
            $this->Mbelajarcrud->hapusdata($KodeData);
            redirect('Cbelajarcrud/formdata');
        }
        function editdata($KodeData)
		{
			$this->Mbelajarcrud->editdata($KodeData);	
		}
		
		
		
			
	}
?>
?>