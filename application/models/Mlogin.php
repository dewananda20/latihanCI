<?php
    class Mlogin extends CI_Model
    {
        function proseslogin()
        {
        $username=$this->input->post('Username');
        $password=$this->input->post('Password');
        $sql="select * from tblogin where Username='".$Username."'";
        $sql.="and password='".$password."'";
        $query=$this->db->query($sql);
        if ($query->num_rows()>0)
        {
            redirect('cadmin/formadmin','refresh');
        }
        else
        {
            $this->session->set_flashdata('pesan','login gagal');
            redirect('clogin/formlogin','refresh');
        }
    }
}
?>
