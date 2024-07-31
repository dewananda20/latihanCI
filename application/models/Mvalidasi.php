<?php
    class Mvalidasi extends CI_Model
    {
        function validasi()
        {
            if ($this->session->userdata('Level')=='')
            {
                echo "<script>alert ('Anda tidak dapat mengakses halaman ini');</script>";
                redirect('clogin/formlogin','refresh');
            }

        }
    }
?>