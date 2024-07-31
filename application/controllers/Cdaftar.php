<?php
    class Cdaftar extends CI_Controller
    {
        function formdaftar()
        {
            // menyimpan view form daftar array data -->konten
            $data['konten'] = $this->load->view('formdaftar', '', TRUE);
            // kirim konten ke halaman utama --> tampilan awal
            $this->load->view('tampilanawal', $data);
        }
        function editdata($KodeData)
            {
                $this->Mbelajarcrud->editdata($KodeData);
            }
     }
    ?>